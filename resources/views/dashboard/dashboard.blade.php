@extends('template')

@section('contenue')
<div>
    @auth
      <div>
          <h1>
              Hello {{ auth()->user()->name }} 😊
          </h1>
      </div>
    @endauth
</div>
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="container-fluid my-4"> <!-- Utilisation de `container-fluid` -->
    <div class="row g-3"> <!-- `g-3` ajoute un espacement entre les colonnes et les lignes -->
        @foreach ($plats as $plat)
        <div class="col-md-3"> <!-- Chaque carte occupe un quart de la ligne -->
            <div class="card" style="width: 18rem;">


                @if ($plat->photo)
                <img src="{{ asset('storage/' . $plat->photo) }}" class="card-img-top" alt="Photo de {{ $plat->nom_plat }}">
                @else
                <img src="{{ asset('images/default.jpg') }}" class="card-img-top" alt="Image par défaut">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $plat->nom_plat }}</h5>
                    <p class="card-text">
                        <!--
                        <strong>Description :</strong> {{ $plat->description ?? 'Aucune description' }} <br>
                        -->
                        <strong>Prix :</strong> {{ $plat->prix }} FCFA <br>
                        <strong>Type :</strong> {{ $plat->typePlat->nom_type ?? 'Non spécifié' }} <br>
                        <strong>Stock :</strong> {{ $plat->nombre_plat_en_stock }} en stock
                    </p>
                    <a href="{{ route('commande.ajouter', $plat) }}" class="btn" style="background-color: #ffce00">Ajouter à ma commande</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
