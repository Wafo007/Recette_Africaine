<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AfricaFood Incription</title>
    <link rel="stylesheet" href="forms.css">
</head>
<body>
        <header class="headers">
            <p><strong><img src="{{ asset('4552778.jpg') }}" alt="image logo" width="150" height="120"></strong></p>
            <nav id="entete" class="entete"> 
                <ul class="navbar">
                    <li><a href="recette">Accueil</a></li>
                    <li><a href="mets">Recettes</a></li>
                    <li><a href="equipe">A propos</a></li>
                    <li><a href="#">Rejoinez-nous</a></li>  
                </ul> 
            </nav>
        </header>
    <div>
        <!---- on verifie si notre session existe--->
        @if (session('success'))
            <script>
                alert('Incription Reussi avec success')
            </script>
        @endif
        <!-------Quand on envoie des donnees faut toujours mettre @csrf ------>
        <form action="{{ route('add.store') }}" method="post">
            
            @csrf
            <fieldset>
                <div class="contener">
                    <div class="photo">
                        <picture>
                            <source srcset="{{ asset('manager.jpg') }}" media="(min-width:100px)">
                            <img src="{{ asset('manager.jpg') }}" alt="africa food"  width="350" height="605">
                        </picture> 
                    </div>
                    
                    <div class="signup">
                       <h1 class="labe">INSCRIPTION</h1>
                       <div class="connection">
                           <div id="first">
                               <label for="name" class="space labe">NOM</label><br>
                               <input type="text" placeholder="entrez votre nom" class="space space2" name="nom" required > 
                           </div>
                           <div>
                               <label for="prenom" class="space labe">PRENOM</label><br>
                               <input type="text" placeholder="entrez votre prenom" class="space space2" name="prenom" required>
                           </div>
                       </div>
                        <label for="email" class="space labe">ADRESSE MAIL</label><br>
                        <input type="email" placeholder="entrez votre adresse mail" class="space space2 rspace" name="email" required><br>
                        <label for="pass" class="space labe">PASS WORD</label><br>
                        <input type="password" placeholder="entrez votre mot de passe" class="space space2 rspace" name="password" required><br>
                        <input type="submit" value="s'inscrire" class="space spbtn">
                        <p class="labe"><strong>vous avez déjà un compte ?</strong> <span><a href="connect">Se connecter</a></span></p>
                    </div>
                    
                  
                </div>
            </fieldset>
            
        </form> 
    </div>
</body>
</html>