<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Ouvrier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            color: #444;
        }

        .navbar {
            background-color: #007bff;
            padding: 1rem 2rem;
        }

        .navbar-brand, .nav-link {
            color: #fff !important;
            font-weight: bold;
        }

        .navbar-nav .nav-item + .nav-item {
            margin-left: 20px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            padding: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            text-align: center;
            font-size: 1.5rem;
        }

        .card-body {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
            box-shadow: none;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .invalid-feedback {
            display: block;
            color: #dc3545;
            margin-top: 5px;
        }

        h1 {
            text-align: center;
            color: #007bff;
            font-size: 2rem;
            margin: 30px 0;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">Danedolee</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Inscription Ouvrier</a>
            </li>
        </ul>
    </div>
</nav>

<h1>Inscription Ouvrier</h1>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Formulaire d'inscription</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ouvrier.register') }}" class="needs-validation" novalidate>
                        @csrf

                        <div class="form-group">
                            <label for="firstName">Prénom</label>
                            <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>
                            @error('firstName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lastName">Nom</label>
                            <input id="lastName" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('lastName') }}" required autocomplete="lastName">
                            @error('lastName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Adresse E-Mail</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirmer le Mot de passe</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                S'inscrire
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
