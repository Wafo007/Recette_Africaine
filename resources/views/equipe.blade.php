<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AfricaFood</title>
    <link rel="stylesheet" href="recette.css">
</head>
<body id="body_of_team">
    <div class="coverall">
        <header class="header">
            <p><strong><img src="{{ asset('4552778.jpg') }}" alt="image logo" width="100" height="80"></strong></p>
            <nav id="entete" class="entete"> 
                <ul class="navbar">
                    <li><a href="recette">Accueil</a></li>
                    <li><a href="mets">Recettes</a></li>
                    <li><a href="#">A propos</a></li>
                    <li><a href="Rejoinez-nous"><span id="joinlink">Rejoinez-nous</span></a></li>  
                </ul> 
            </nav>
            <!--Pour afficher le resultat de la rechercher-->
            <!-------------------------------------------------------------------------------------------------------------->
                <input type="text" id="recherche" placeholder="Recherche une recette" name="query"><button type="sumit" >Search</button>
                <img src="{{ asset('ImageProjet/menu-btn.png')  }}" alt="menubutton" class="Menu-Hambuger">
            </form>
        </header>
    <section>
        <div class="AboutUs">
            <h1>A propos de AfricaFood </h1><br>
            <h2>La philosophie derrière la création de recettes</h2><br>
            <br>
            <p>Bienvenue chez AfricaFood. Nous aspirons à symboliser votre unique référence pour toutes les informations liées à l'alimentation dont vous pourriez avoir besoin.</p> <br>
            <br>
            <p> Le site est géré par une équipe de passionnés de cuisine, ou épicuriens, qui se font un plaisir à vous proposer des recettes, des articles informatifs et bien plus encore.</p><br>

            <p> En son cœur, AfricaFood représente un moyen de vous aider à trouver des recettes attrayantes. Nous en avons des milliers à vous proposer sur le site et d'autres qui sont ajoutées très régulièrement. <br>

            <p> Pendant que vous êtes ici, vous pouvez également profiter de notre magazine. C'est là que nous proposons notre aide pour éduquer les personnes dans le domaine de la nourriture et de la cuisine en général. <br>
                <br>
                Que vous soyez un nouveau venu dans le monde de la cuisine ou que vous aimiez passer du temps dans la cuisine depuis des années, nous sommes sûrs que vous trouverez des articles d'intérêt. 
                Les articles couvrent un large éventail de sujets <br>
                <br>
                Pour trop de gens, la cuisine et la nourriture en général restent un mystère. Chez AfricaFood, nous croyons indubitablement que cela ne devrait pas être le cas. Nous sommes sûrs qu'avec des recettes claires et des guides simples, tout le monde peut apprendre à maîtriser la cuisine et commencer à préparer de délicieux repas sains pour lui-même, ses amis et sa famille. <br>
                <br>
                La nourriture peut être une merveilleuse façon de rassembler les gens. S'asseoir pour un repas avec d'autres convives  est l'une des choses les plus élémentaires que nous puissions faire, mais aussi l'une des plus agréables. Chez AfricaFood, nous faisons de notre mieux pour faciliter cela avec nos idées de recettes qui vont du rapide et facile au plus élaboré et impliqué.
                <br>
                Nous pensons également que la nourriture peut être une merveilleuse façon de se familiariser avec d'autres cultures.
                <br>
                <br>
                Aujourd'hui, nous pouvons savourer des cuisines du monde entier sans avoir à nous aventurer très loin de notre domicile. En choisissant de cuisiner un repas d'une cuisine différente de la vôtre, vous pouvez non seulement déguster de délicieux plats, mais vous pouvez également trouver une nouvelle façon de vous connecter avec des personnes venant d'autres horizons et d'apprendre à les connaitre. <br>
                <br>
                L'équipe de AfricaFood considère la nourriture comme bien plus qu'un carburant pour le corps. Cuisiner et manger doit être une expérience agréable qui rassemble les gens.
                <br>
                <br>
                Nous espérons que vous trouverez ici tout ce dont vous avez besoin pour réaliser cela par vous-même et pour commencer à profiter d'un monde merveilleux de délices culinaires.
            </p>
        </div>
        <h1 class="H1">NOS EXPERT</h1>
        <div id="image_container">   
            <div id="images">
                <img src="{{ asset('ImageProjet/Images de equipe/wafo.jpg') }}" alt="wafo image">
                <img src="{{ asset('ImageProjet/Images de equipe/logo2.jpg') }}" alt="marcel image">
                <img src="{{ asset('ImageProjet/Images de equipe/logo2.jpg') }}" alt="">
                <img src="{{ asset('ImageProjet/Images de equipe/logo2.jpg') }}" alt="">
                <img src="{{ asset('ImageProjet/Images de equipe/logo3-5.jpg') }}" alt="">
            </div>
        </div> 
    </section>
    <footer>
        <span id="copyright"><p>Copyright © 2023 - 2024 Les Mini Du Web. Tout les droit réserves</p></span>
        <ul>
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
    <script src="recette.js"></script>
</body>
</html>