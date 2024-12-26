@extends('template')

@section('contenue')
<div class="container my-5">
    <h2>Gestion des Plats et Types de Plats</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="/restaurant/type" class="mb-4">
        @csrf
        <div class="mb-3">
            <label for="nom_type" class="form-label">Nom du type de plat</label>
            <input type="text" name="nom_type" id="nom_type" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter Type</button>
    </form>

    <!-- Formulaire pour ajouter un plat -->
    <form method="POST" action="/restaurant/plat" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="plat_nom" class="form-label">Nom du plat</label>
            <input type="text" name="nom_plat" id="plat_nom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="plat_description" class="form-label">Description</label>
            <textarea name="description" id="plat_description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="plat_prix" class="form-label">Prix</label>
            <input type="number" name="prix" id="plat_prix" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Nombre en stock</label>
            <input type="number" name="nombre_plat_en_stock" id="stock" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="type_plat_id" class="form-label">Type de plat</label>
            <select name="type_plat_id" id="type_plat_id" class="form-select" required>
                @foreach($types as $type)
                <option value="{{ $type->id }}">{{ $type->nom_type }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image du plat</label>
            <input type="file" name="photo" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter Plat</button>
    </form>

    <!-- Liste des plats -->
    <h3 class="mt-5">Liste des Plats</h3>
    <ul class="list-group">
        @foreach($plats as $plat)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $plat->nom_type }} - {{ $plat->typePlat->nom_type }} ({{ $plat->prix }} €)
            <form method="POST" action="/restaurant/plat/{{ $plat->id }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection
