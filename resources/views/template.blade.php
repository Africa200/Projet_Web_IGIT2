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
    .card {
        transition: box-shadow 0.3s ease; /* Animation de transition */
    }

    .card:hover {
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2); /* Effet d'élévation au survol */
    }

    .btn-primary {
        background-color: #007BFF; /* Couleur principale personnalisée */
        border-color: #007BFF;
        transition: background-color 0.3s ease, transform 0.2s ease; /* Animation pour le survol */
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Couleur foncée au survol */
        border-color: #0056b3;
        transform: scale(1.05); /* Effet de zoom léger au survol */
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
                        <a class="nav-link" href="{{ route('dashboard') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('commande.index') }}">Mes commandes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                @auth
                <form action="{{ url('/logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark-custom rounded-pill px-4 ms-3">
                        Se déconnecter
                    </button>
                </form>
                @endauth
            </div>
        </div>
    </nav>
    <!--
        Le contenue de mon site
    -->
    <div>
        @yield('contenue')
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
