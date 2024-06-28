<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AfricaFood</title>
    <link rel="stylesheet" href="recette.css">
</head>
<body class="body_mets">
        <header class="header">
        <p><strong><img src="{{ asset('4552778.jpg') }}" alt="image logo" width="100" height="80"></strong></p>
            <nav id="entete" class="entete"> 
                <ul class="navbar">
                    <li><a href="recette">Accueil</a></li>
                    <li><a href="#">Recettes</a></li>
                    <li><a href="equipe">A propos</a></li>
                    <li><a href="Rejoinez-nous"><span id="joinlink">Rejoinez-nous</span></a></li>  
                </ul> 
            </nav>
            <form action="{{ route('search') }}" method="GET">
            <input type="text" id="recetteId" placeholder="Recherche une recette" name="q"><button type="submit">Search</button>
            </form>
            <img src="{{ asset('ImageProjet/menu-btn.png')  }}" alt="menubutton" class="Menu-Hambuger">
        </header>
    <section class="section_mets">
        <div id="choosecountry">
            <label for="">Selectionner un pays pour voir les differents recettes</label><br>
            <br>
            <select name="recette" id="recette">
                <option value="Cameroon">Cameroon</option>
                <option value="Tchad">Tchad</option>
                <option value="Senegal">Senegal</option>
            </select>
        </div>
        <div class="bgcolor">
                <h1 id="Menu" class="H1">Menu Camerounais</h1>
                <!--la regle pour voir les recette-->
            <p id="rule">Cliquez sur une image pour voir la recette</p>
            
            <div class="container">
                <a href="{{ route('mets.show', $mets->id=8) }}" class="cadre_des_images"><img src=" {{ asset('ImageProjet/poisonbraisee.jpg')   }}" alt="poison braisee" ><br><span class="nomdesaliments"> Poisson braisee</span></a>
                <a href="{{ route('mets.show', $mets->id=2) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/Recettes sauce.jpg') }}" alt="sauce" ><br><span class="nomdesaliments"> Recettes sauce</span></a>
                <a href="{{ route('mets.show', $mets->id=2) }}" class="cadre_des_images"><img src=" {{ asset('ImageProjet/Cookie.jpg')   }}" alt="Cookie" ><br><span class="nomdesaliments"> KOKI avec plantain</span></a>
                <a href="{{ route('mets.show', $mets->id=6) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/Okok.jpg') }}" alt="Okok" ><br> <span class="nomdesaliments">OKOK sucre/sallee</span></a>
                <a href="{{ route('mets.show', $mets->id=7) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/corn tchap.jpg') }}" alt="corn tchap" ><br> <span class="nomdesaliments">Corn Tchap</span></a>
                <a href="{{ route('mets.show', $mets->id=19) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/DG.jpg') }}" alt="DG" ><br> <span class="nomdesaliments">DG</span></a>
                <a href="{{ route('mets.show', $mets->id=1) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/Eru.jpg') }}" alt="eru" ><br> <span class="nomdesaliments">Eru</span></a>
                <a href="{{ route('mets.show', $mets->id=10) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/kondre.jpg') }}" alt="Kondre" ><br> <span class="nomdesaliments">Kondre</span></a>
                <a href="{{ route('mets.show', $mets->id=13) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/Ndole.jpg') }}" alt="ndole" ><br> <span class="nomdesaliments">Ndole</span></a>
                <a href="{{ route('mets.show', $mets->id=9) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/pile.jpg') }}" alt="pilé" ><br> <span class="nomdesaliments">pilé</span></a>
                <a href="{{ route('mets.show', $mets->id=11) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/Met cameroonais/Taro.jpg') }}" alt="taro" ><br> <span class="nomdesaliments">Taro</a>
                <a href="{{ route('mets.show', $mets->id=3) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/Met cameroonais/Banane malasce.jpg') }}" alt="Banane malasce" ><br> <span class="nomdesaliments">Banane malasce</span></a>
                <a href="{{ route('mets.show', $mets->id=12) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/Met cameroonais/Mbongo ft plantain mûr.jpg') }}" alt="Mbongo ft plantain mûr" ><br> <span class="nomdesaliments">Mbongo ft plantain mûr</span></a>

            </div>
                <h1 id="Menu" class="H1">Menu Tchadienne</h1>
                <div class="container">
                    <a href="{{ route('mets.show', $mets->id=20) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/mets tchadienne/Boulettes de viande a la sauce gombo(Canda du tchad).jpg') }}" alt="taro" ><br> <span class="nomdesaliments">Boulettes de viande a la sauce gombo(Canda du tchad)</a>
                    <a href="{{ route('mets.show', $mets->id=21) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/mets tchadienne/Gâteau Tchadien.jpg') }}" alt="Gâteau Tchadien" ><br> <span class="nomdesaliments">Gâteau Tchadien</a>
                    <a href="{{ route('mets.show', $mets->id=20) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/mets tchadienne/Morue frit avec sa sauce.jpg') }}" alt="Morue frit avec sa sauce" ><br> <span class="nomdesaliments">Morue frit avec sa sauce</a>
                    <a href="{{ route('mets.show', $mets->id=22) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/mets tchadienne/Sadza, stew and veg.jpg') }}" alt="sanza" ><br> <span class="nomdesaliments">Sadza,stew and veg</a>
                    <a href="{{ route('mets.show', $mets->id=23) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/mets tchadienne/sanza and goat.jpg') }}" alt="sanza" ><br> <span class="nomdesaliments">Sanya and goat</a>
                    <a href="{{ route('mets.show', $mets->id=24) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/mets tchadienne/Kanda au poulet.jpg') }}" alt="Morue frit avec sa sauce" ><br> <span class="nomdesaliments">Kanda au poulet</a>
                </div>

                <h1 id="Menu" class="H1">Menu Senegalais</h1>
                <div class="container">
                    <a href="{{ route('mets.show', $mets->id=15) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/mets senegal/Ceebu yapp senegal.jpg') }}" alt="Ceebu yapp senegal" ><br> <span class="nomdesaliments">Ceebu yapp</a>
                    <a href="{{ route('mets.show', $mets->id=10) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/mets senegal/Dakhine senegal.jpg') }}" alt="Dakhine senegal" ><br> <span class="nomdesaliments">Dakhine</a>
                    <a href="{{ route('mets.show', $mets->id=16) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/mets senegal/Maafe (senegal).jpg') }}" alt="Maafe manfee" ><br> <span class="nomdesaliments">Maafe</a>
                    <a href="{{ route('mets.show', $mets->id=17) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/mets senegal/poulet yassa senegal.jpg') }}" alt="poulet yassa senegal" ><br> <span class="nomdesaliments">Poulet Yassa</a>
                    <a href="{{ route('mets.show', $mets->id=18) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/mets senegal/riz gras.jpg') }}" alt="riz gras" ><br> <span class="nomdesaliments">Riz Gras</a>
                    <a href="{{ route('mets.show', $mets->id=14) }}" class="cadre_des_images"><img src="{{ asset('ImageProjet/mets senegal/Tchep senegal.jpg') }}" alt="Tchep" ><br> <span class="nomdesaliments">Tchep</a>
                </div>
        </div>
    </section>
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
    <script src="recette.js"></script>
</body>
</html>