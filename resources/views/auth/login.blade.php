<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 28rem;">
        <h3 class="text-center mb-4">Connexion</h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de Passe</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn w-100" style="background-color: #ffce00">Se connecter</button>
        </form>
        <p class="text-center mt-3">
            Vous n'avez pas de compte ? <a href="{{ url('/register') }}">Créer un compte</a>
        </p>
    </div>
</div>
</body>
</html>
