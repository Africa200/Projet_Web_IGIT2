<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Plat;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    // Affiche le formulaire pour ajouter un plat à la commande
    public function showAddToCommande(Plat $plat)
    {
        return view('commande.ajouter', compact('plat'));
    }

    // Traite l'ajout d'un plat à la commande
    public function addToCommande(Request $request, Plat $plat)
    {
        // Validation de la quantité
        $request->validate([
            'quantite' => 'required|integer|min:1'
        ]);

        // Trouver ou créer la commande courante pour l'utilisateur authentifié
        $commande = Commande::firstOrCreate(
            ['user_id' => auth()->id(), 'etat' => 'courant'] // Conditions de recherche
        );

        // Ajouter le plat à la commande avec la quantité spécifiée
        // On vérifie si le plat existe déjà dans la commande et on met à jour la quantité si nécessaire
        $commande->plats()->syncWithoutDetaching([
            $plat->id => ['quantite' => $request->quantite]
        ]);

        // Rediriger vers le tableau de bord avec un message de succès
        return redirect()->route('dashboard')->with('success', 'Plat ajouté à la commande avec succès !');
    }

    // Recuperation des different commande pour l'affichage
    public function index()
    {
        $commandes = Commande::where('user_id', auth()->id())
            ->orderByRaw("etat = 'courant' DESC") // Commande courante en premier
            ->get();

        return view('commande.index', compact('commandes'));
    }

    public function show(Commande $commande)
    {
        // Vérifier que l'utilisateur est autorisé à voir cette commande
        //$this->authorize('view', $commande);

        $plats = $commande->plats; // Récupérer les plats associés
        $totalGeneral = $plats->sum(fn($plat) => $plat->pivot->quantite * $plat->prix); // Calculer le total général

        return view('commande.show', compact('commande', 'plats', 'totalGeneral'));
    }

    public function annuler(Commande $commande)
    {
        //$this->authorize('update', $commande); // Vérifie l'accès

        if ($commande->etat !== 'courant') {
            return redirect()->route('commande.index')->with('error', 'Impossible d\'annuler une commande archivée.');
        }

        $commande->delete();

        return redirect()->route('commande.index')->with('success', 'Commande annulée avec succès.');
    }

    public function valider(Commande $commande)
    {
        //$this->authorize('update', $commande); // Vérifie l'accès

        if ($commande->etat !== 'courant') {
            return redirect()->route('commande.index')->with('error', 'Cette commande est déjà archivée.');
        }

        $commande->update(['etat' => 'archive']);

        return redirect()->route('commande.index')->with('success', 'Commande validée et archivée avec succès.');
    }
}
