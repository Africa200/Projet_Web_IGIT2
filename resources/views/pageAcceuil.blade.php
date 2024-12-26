<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Style personnalisé pour le bouton */
        .btn-dark-custom {
            background-color: #333333; /* Noir sombre */
            color: white;
        }
        .btn-dark-custom:hover {
            background-color: #555555; /* Gris plus clair au survol */
            color: #ffce00; /* Texte jaune qui correspond à la navbar */
        }
        body{
            padding-top: 70px
        }
    </style>
    <title>Restaurant</title>
  </head>
  <body>
    <nav class="navbar navbar-light fixed-top" style="background-color: #ffce00;">
        <div class="container-fluid">
            <!-- Nom ou logo du site -->
            <a class="navbar-brand" href="#"><span>R</span>estaurant</a>

            <!-- Navigation alignée horizontalement -->
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row gap-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <!-- Bouton "Se connecter" -->
                <a class="btn btn-dark-custom rounded-pill px-4 ms-3" href="#" role="button">Se connecter</a>
            </div>
        </div>
    </nav>
    <!--
        Carrousel
    -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/img3.jpg" class="d-block w-100" alt="iamges1" height="500px">
          </div>
          <div class="carousel-item">
            <img src="images/img1.jpg" class="d-block w-100" alt="iamges2" height="500px">
          </div>
          <div class="carousel-item">
            <img src="images/img2.jpg" class="d-block w-100" alt="iamges3" height="500px">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <!--
        Mes different card
    -->
    <div class="container my-5">
        <div class="row">
            <!-- Carte 1 -->
            <div class="col-md-6 mb-4">
                <div class="card border-0" style="height: 100%;">
                    <img src="images/images.jpg" class="card-img-top" alt="Image Carte 1">

                </div>
            </div>

            <!-- Carte 2 -->
            <div class="col-md-6 mb-4">
                <div class="card border-0" style="height: 100%;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #ffce00">Des Humberger a vous couper le souffle</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse commodi, minus aspernatur numquam a ad architecto eveniet aperiam minima fugiat quibusdam consectetur nobis animi laborum sapiente unde dicta adipisci accusantium?
                        Magnam rem non sunt minus iste pariatur nobis harum cupiditate libero reiciendis cum totam dignissimos omnis quos quibusdam et suscipit quia, minima magni officia obcaecati tempora voluptatem neque? Totam, est.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <!-- Carte 1 -->
            <div class="col-md-6 mb-4">
                <div class="card border-0" style="height: 100%;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #ffce00">De la viande de qualite hors paire</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse commodi, minus aspernatur numquam a ad architecto eveniet aperiam minima fugiat quibusdam consectetur nobis animi laborum sapiente unde dicta adipisci accusantium?
                        Magnam rem non sunt minus iste pariatur nobis harum cupiditate libero reiciendis cum totam dignissimos omnis quos quibusdam et suscipit quia, minima magni officia obcaecati tempora voluptatem neque? Totam, est.</p>
                    </div>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="col-md-6 mb-4">
                <div class="card border-0" style="height: 100%;">
                    <img src="images/viande.jpg" class="card-img-top" alt="Image Carte 1">

                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2024 Mon Site. Tous droits réservés.</p>
            <p><a href="#" class="text-white">Mentions légales</a> | <a href="#" class="text-white">Politique de confidentialité</a></p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
