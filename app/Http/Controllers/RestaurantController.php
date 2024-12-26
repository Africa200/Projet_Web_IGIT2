<?php
namespace App\Http\Controllers;

use App\Models\Plat;
use App\Models\TypePlat;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Affiche les plats et leurs types
     */
    public function dashboard()
    {
        $plats = Plat::with('TypePlat')->get();
        $types = TypePlat::all();
        return view('restaurant.index', compact('plats', 'types'));
    }

    /**
     * Enregistre un nouveau plat
     */
    public function storePlat(Request $request)
    {
        $request->validate([
            'nom_plat' => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix' => 'required|numeric',
            'nombre_plat_en_stock' => 'required|numeric',
            'type_plat_id' => 'required|exists:type_plats,id',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation pour la photo
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('plats_photos', 'public');
        }
        Plat::create([
            'nom_plat' => $request->nom_plat,
            'description' => $request->description,
            'prix' => $request->prix,
            'nombre_plat_en_stock' => $request->nombre_plat_en_stock,
            'type_plat_id' => $request->type_plat_id,
            'photo' => $photoPath,
        ]);

        return redirect()->back()->with('success', 'Plat ajouté avec succès');
    }

    /**
     * Enregistre un nouveau type de plat
     */
    public function storeTypeDePlat(Request $request)
    {
        $request->validate([
            'nom_type' => 'required|string|max:255',
        ]);
        TypePlat::create($request->all());

        return redirect()->back()->with('success', 'Type de plat ajouté avec succès');
    }

    /**
     * Supprime un plat
     */
    public function destroyPlat($id)
    {
        Plat::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Plat supprimé avec succès');
    }

    /**
     * Supprime un type de plat
     */
    public function destroyTypeDePlat($id)
    {
        TypePlat::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Type de plat supprimé avec succès');
    }
}
