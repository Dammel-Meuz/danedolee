<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Accueil</div>

                    <div class="card-body text-center">
                        <a href="{{ route('ouvrier.login') }}" class="btn btn-primary m-2">Connexion Ouvrier</a>
                        <a href="{{ route('ouvrier.register') }}" class="btn btn-secondary m-2">Inscription Ouvrier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
