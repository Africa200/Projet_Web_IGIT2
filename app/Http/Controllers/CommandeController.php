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
}
