@extends('template')
@section('contenue')
<div class="container-fluid my-4">
    <div class="row g-3">
        <div class="col-md-3">
            <div class="card">
                <img src="images/coca.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title {{ $item }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Ajouter à ma commande</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
