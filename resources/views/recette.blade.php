<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AfricaFood</title>
    <link rel="stylesheet" href="recette.css">
</head>
<body class="body_recette">
    <div class="coverall">
        <header class="header">
        <p><strong><img src="{{ asset('4552778.jpg') }}" alt="image logo" width="100" height="80"></strong></p>
            <nav id="entete" class="entete"> 
                <ul class="navbar">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="mets">Recettes</a></li>
                    <li><a href="equipe">A propos</a></li>
                    <li><a href="Rejoinez-nous"><span id="joinlink">Rejoinez-nous</span></a></li>  
                </ul> 
            </nav>
            <input type="text" id="recherche" placeholder="Recherche une recette" name="q"><button>Search</button>
            <img src="{{ asset('ImageProjet/menu-btn.png') }}" alt="menubutton" class="Menu-Hambuger">
        </header>
        <section id="baniere">
            <div id="introduction">
                <h1>Recette Africaine</h1>
                <h2 id="pseudo">« La bonne cuisine est honnête, sincère et simple » Les Mini du Web.</h2>
                <h4>DES RECETTES AFRICAINES SIMPLES EzT DELICIEUSES JUSTE POUR VOUS!</h4>
                <br>
                <h2>VOUS AIMEZ LES RECETTES AFRICAINE, MAIS VOUS NE SAVEZ PAS COMMENT LA CUISINER?</h2> 
                <p> <br>
                    Découvrez sur cette page et sur la chaine youtube non seulement les recettes 100% africaine authentiques de notre equipe mais également des explications sur la conception et l'utilisation des produits africaine. <br>
                    Des PDF seront a votre dispossition si jamais vous voudriez telecharger une recette. <br>
                    La cuisine africaine est aussi riche que varié. <br>
                    Les different pays de l'afrique centrale telque le Cameroon, le senegal, le Congo et le Tchad regorgent de recettes et de produits connus et méconnus. <br>
                    On surprend ses convives en proposant du Ndole, un Yassa ou encore un pile ! De quoi innover avec des plats complets pour changer de la routine du quotidien. </p>
                    <br>
            </div>
        </section>
    </div>
    <section class="section2">
        <div id="alignitems">
            <h3 id="H3_acceuil">RECETTES POPULAIRES AFRICAINES</h3>
            <p class="para" id="para"> Voici quelques recettes populaires Africaines. <br> Mais sachez qu’il ya beaucoup plus de recettes de cuisine Africaine dans ce site. <br>
                Aller dans l'onglet recette pour avoir une apercu sur nos different plats</p>
        </div>
            <div id="alignfood">
                <div class="foodAcc">
                    <p class="food">Yassa au poulet</p>
                    <p class="para">Le yassa au poulet est un plat traditionnel sénégalais, originaire de l'ethnie Wolof, qui est également populaire dans d'autres pays d'Afrique de l'Ouest. Il s'agit d'un plat de poulet mariné et cuit dans une sauce à base d'oignons, de citron et d'épices, ce qui lui confère une saveur acidulée et parfumée.</p> 
                    <a href=""><img src="{{ asset ('ImageProjet/mets tchadienne/meal.jpg') }}" alt="aliment yassa au poulet" width="300" height="300"></a>
                    
                </div>
                <div class="foodAcc">
                    <p class="food">Poison braisee</p>
                    <p class="para">Le poison braisé camerounais, également connu sous le nom de "poisson braisé", est un plat traditionnel populaire au Cameroun. Il s'agit d'un plat de poisson grillé préparé avec des épices et des assaisonnements locaux, qui lui confèrent une saveur délicieuse et parfumée.</p>
                    <a href=""><img src="{{ asset('ImageProjet/poisonbraisee.jpg') }}" alt="poison braisee"></a>
                </div>
                <div class="foodAcc">
                    <p class="food">Koki</p>
                    <p class="para">Le koki camerounais est un plat traditionnel originaire du Cameroun, très populaire dans la cuisine camerounaise. Il s'agit d'une sorte de gâteau de haricots préparé avec des haricots blancs, de l'huile de palme, des épices et parfois de la viande ou du poisson.</p>
                    <a href=""><img src="{{ asset('ImageProjet/Cookie.jpg') }}" alt="Cookie" width="300" height="300"></a>
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