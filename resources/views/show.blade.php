<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #1e3799; /* Couleur bleu foncé */
            padding: 1rem 2rem;
            border-bottom: 2px solid #0c2461; /* Couleur plus foncée pour le bord inférieur */
        }
        .navbar-brand {
            color: #fff !important;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .nav-link {
            color: #fff !important;
            font-size: 1rem;
            margin-right: 1rem;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #ccc !important;
        }
        .card {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 2rem;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #ddd;
        }
        .card-body {
            padding: 1.5rem;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 0.75rem;
        }
        .container {
            max-width: 1200px;
            padding: 2rem 0;
        }
        .welcome-text {
            text-align: center;
            font-size: 1.5rem;
            margin: 3rem 0;
            color: #555;
        }
        .about-section {
            display: none;
            margin-top: 2rem;
        }
        .about-card {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
        }
        .about-card h2,
        .about-card h3 {
            font-weight: bold;
            color: #2c3e50;
        }
        .about-card p,
        .about-card ul {
            font-size: 1rem;
            line-height: 1.6;
            color: #555;
        }
        .about-card ul {
            padding-left: 1rem;
        }
        .about-card ul li {
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">JOB PORTAL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ouvrier.loginForme') }}">Connexion Ouvrier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ouvrier.register') }}">Créer Compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="about-link">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailto:contact@danedolee.org">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <div class="container">
        <div id="about-section" class="about-section">
            <div class="about-card">
                <h2>Mission de l'Association</h2>
                <p>Danedolee est une association dédiée à simplifier le processus de recrutement en facilitant la mise en relation entre employeurs et candidats qualifiés pour divers postes de travail manuel. Notre mission est de connecter les entreprises avec des talents compétents, tout en aidant les travailleurs à trouver des opportunités professionnelles qui correspondent à leurs compétences et aspirations.</p>
            </div>
            <div class="about-card">
                <h3>Nos Objectifs</h3>
                <p><strong>Pour les Employeurs :</strong></p>
                <ul>
                    <li>Offrir une plateforme intuitive pour publier des offres d'emploi et rechercher des candidats qualifiés.</li>
                    <li>Fournir un accès à une base de données de travailleurs compétents dans divers domaines du travail manuel.</li>
                    <li>Simplifier le processus de recrutement en offrant des outils de gestion des candidatures.</li>
                </ul>
                <p><strong>Pour les Candidats :</strong></p>
                <ul>
                    <li>Faciliter la recherche d'opportunités d'emploi correspondant à leurs compétences et expériences.</li>
                    <li>Offrir un espace pour créer des profils professionnels et postuler directement aux offres d'emploi.</li>
                    <li>Proposer des ressources et des conseils pour améliorer leur employabilité.</li>
                </ul>
            </div>
            <div class="about-card">
                <h3>Nos Services</h3>
                <p><strong>Publication d'Offres d'Emploi :</strong> Les employeurs peuvent publier facilement des annonces pour des postes vacants, détaillant les compétences requises et les responsabilités du poste.</p>
                <p><strong>Recherche de Candidats :</strong> Les employeurs peuvent utiliser notre moteur de recherche pour trouver des candidats en fonction de critères spécifiques comme le métier, l'expérience, et la localisation.</p>
                <p><strong>Gestion des Candidatures :</strong> Une interface conviviale pour suivre et gérer les candidatures reçues, facilitant ainsi le processus de sélection.</p>
                <p><strong>Profils de Candidats :</strong> Les travailleurs peuvent créer des profils détaillés avec leurs informations personnelles, compétences, expériences et références.</p>
                <p><strong>Support et Assistance :</strong> Notre équipe est disponible pour aider les utilisateurs, tant employeurs que candidats, à naviguer sur la plateforme et à résoudre tout problème éventuel.</p>
            </div>
            <div class="about-card">
                <h3>Fondateurs</h3>
                <p>Danedolee a été fondée par Pierre Felix et Oumou Dieng, deux visionnaires engagés à améliorer le marché du travail manuel. Leur expertise combinée en ressources humaines et en développement communautaire a inspiré la création d'une plateforme qui répond aux besoins des employeurs et des candidats.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="welcome-text">WELCOME ICI TU POURRA TROUVER LES DIFFERENTS PROFILS QUE TU RECHERCHE .</p>
            </div>
        </div>
        <div class="row">
            @foreach($ouvrier as $ouvrier)
                <div class="col-md-4 mb-4">

                    <div class="card">
                        <img src="{{ asset('images/' . $ouvrier->image)}}"  class="card-img-top">
                        <div class="card-body">
                           <h5 class="card-title"> Nom: {{ $ouvrier->name }}</h5>
                           <h5 class="card-title">Phone:{{ $ouvrier->phone }}</h5>
                           <h5 class="card-title">address:{{ $ouvrier->addres }}</h5>
                           <h5 class="card-title">Region:{{ $ouvrier->region }}</h5>
                            <!-- Ajouter d'autres informations si nécessaire -->
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script
