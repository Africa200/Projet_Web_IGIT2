@extends('template')

@section('contenue')
<div class="container mt-5">
    <h2>Résumé de la commande #{{ $commande->id }}</h2>
    @if(isset($remisePrice))
        <h5>Remise de {{ $remisePrice }} FCFA</h5>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Produit</th>
            <th>Prix unitaire</th>
            <th>Quantité</th>
            <th>Total</th>
            @if ($commande->etat === 'courant')
            <th>Actions</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach ($plats as $plat)
        <tr>
            <td>{{ $plat->nom_plat }}</td>
            <td>{{ $plat->prix }} FCFA</td>
            <td>{{ $plat->pivot->quantite }}</td>
            <td>
                @if(isset($remisePrice))
                <!-- Total normal barré -->
                <span style="text-decoration: line-through; color: red;">
            {{ $plat->pivot->quantite * $plat->prix }} FCFA
        </span>
                <!-- Total après remise -->
                <span>
            {{ ($plat->pivot->quantite * $plat->prix) - $remisePrice }} FCFA
        </span>
                @else
                <!-- Total sans remise -->
                {{ $plat->pivot->quantite * $plat->prix }} FCFA
                @endif
            </td>
            @if ($commande->etat === 'courant')
            <td>
                <!-- Boutons pour augmenter/diminuer les quantités -->
                <form action="#" method="POST" style="display: inline-block;">
                    @csrf
                    <button class="btn btn-secondary btn-sm">-</button>
                </form>
                <form action="#" method="POST" style="display: inline-block;">
                    @csrf
                    <button class="btn btn-secondary btn-sm">+</button>
                </form>
            </td>
            @endif
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th colspan="3">Total général</th>
            <th>{{ $totalGeneral }} FCFA</th>
        </tr>
        </tfoot>
    </table>

    @if ($commande->etat === 'courant')
    <form action="{{ route('commandes.valider', $commande) }}" method="POST">
        @csrf
        <button class="btn btn-success">Valider la commande</button>
    </form>
    @endif
</div>
@endsection
