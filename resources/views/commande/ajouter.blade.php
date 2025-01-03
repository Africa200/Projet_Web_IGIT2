@extends('template')

@section('contenue')
<div class="container my-5">
    <h1>Ajouter {{ $plat->nom_plat }} à votre commande</h1>
    <form action="{{ route('commande.ajouter.post', $plat) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="quantite" class="form-label">Quantité</label>
            <input type="number" name="quantite" id="quantite" class="form-control" value="1" min="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter à ma commande</button>
        <a href="{{ url('/dashboard') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
