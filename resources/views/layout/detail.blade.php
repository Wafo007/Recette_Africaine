<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('recette.css') }}">
    <title>AfricaFood</title>
</head>
<body id="body_detail">
    <header class="header">
    <p><strong><img src="{{ asset('4552778.jpg') }}" alt="image logo" width="100" height="80"></strong></p>
        <nav id="entete" class="entete"> 
            <ul class="navbar">
                <li><a href="recette">Accueil</a></li>
                <li><a href="mets">Recettes</a></li>
                <li><a href="equipe">A propos</a></li>
                <li><a href="Rejoinez-nous"><span id="joinlink">Rejoinez-nous</span></a></li>  
            </ul> 
        </nav>
        <input type="text" id="recherche" placeholder="Recherche une recette"><button>Search</button>
        <img src="{{ asset('ImageProjet/menu-btn.png')  }}" alt="menubutton" class="Menu-Hambuger">
    </header>
    <h1 id="h1id">{{ $met->title }}</h1>
    <br>
    <br>
    <div class="posieleme">
        <h2>Description :</h2><br>
        <div>{{ $met->description }}</div><br>
        <h2>Ingredients :</h2><br>
        <div>{{ $met->ingredient }}</div><br>
        <h2>Preparation :</h2><br>
        <div>{{ $met->preparation }}</div><br>
        <h2>Temps de cuisson :</h2><br>
        <div>{{ $met->temps_de_cuisson }}</div><br>
    </div>
    <footer>
        <span id="copyright"><p>Copyright © 2023 - 2024 Les Mini Du Web. Tout les droit réserves</p></span>
        <ul>
        <li>
            <li><a href=""><img src="{{ asset('ImageProjet/icon facebook.jpg') }}" alt="icon de facebook"></a></li>
            <li><a href=""><img src="{{ asset('ImageProjet/icon instagram.jpg') }}" alt="icon de instagram"></a></li>
            <li><a href=""><img src="{{ asset('ImageProjet/icon youtube.jpg') }}" alt="icon de youtube"></a></li> 
        </ul><br>
        <div id="private">
            <div class="ligneblanche"></div>
            <p><a href="#">Politique de confidentialité</a></p>
            <br>
            <p>Gestion des cookies</p>
        </div> 
    </footer>
    <script src="{{ asset('recette.js') }}"></script>
</body>
</html>