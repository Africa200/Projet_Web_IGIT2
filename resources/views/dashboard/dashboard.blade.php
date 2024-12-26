@extends('template')
@section('contenue')
<div class="container-fluid my-4"> <!-- Utilisation de `container-fluid` -->
    <div class="row g-3"> <!-- `g-3` ajoute un espacement entre les colonnes et les lignes -->
        <div class="col-md-3"> <!-- Chaque carte occupe un quart de la ligne -->
            <div class="card" style="width: 18rem, height:100px">
                <img src="images/poisson.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn" style="background-color: #ffce00">Ajouter à ma commande</a>
                </div>
            </div>
        </div>

        <div class="col-md-3"> <!-- Chaque carte occupe un quart de la ligne -->
            <div class="card" style="width: 18rem, height:100px">
                <img src="images/coca.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn" style="background-color: #ffce00">Ajouter à ma commande</a>
                </div>
            </div>
        </div>

        <div class="col-md-3"> <!-- Chaque carte occupe un quart de la ligne -->
            <div class="card" style="width: 18rem, height:100px">
                <img src="images/plat1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn" style="background-color: #ffce00">Ajouter à ma commande</a>
                </div>
            </div>
        </div>

        <div class="col-md-3"> <!-- Chaque carte occupe un quart de la ligne -->
            <div class="card" style="width: 18rem, height:100px">
                <img src="images/plat2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn" style="background-color: #ffce00">Ajouter à ma commande</a>
                </div>
            </div>
        </div>

        <div class="col-md-3"> <!-- Chaque carte occupe un quart de la ligne -->
            <div class="card" style="width: 18rem, height:100px">
                <img src="images/plat3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn" style="background-color: #ffce00">Ajouter à ma commande</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
