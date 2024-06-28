<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AfricaFood</title>
    <link rel="stylesheet" href="connect.css">
</head>
<body>
    <div class="division">
        <form>
            <fieldset>
                <div class="connect">
                    <div class="head">
                        <picture>
                            <source srcset="manager.jpg">
                            <img src="{{ asset('manager.jpg') }}" alt="africa food" width="350" height="605">
                        </picture>
                    </div>
                    <div class="body">
                        <h1 class="labe">CONNECTION</h1>
                        <label for="name" class="marge labe">ADRESSE MAIL</label><br>
                        <input type="email" class="marge space" placeholder="entrez votre adresse mail" required><br>
                        <label for="password" class="marge labe">MOT DE PASSE</label><br>
                        <input type="password" class="marge space" placeholder="entrez votre mot de passe" required><br>
                        <input type="submit" class="marge btn">
                        <p class="labe">vous n'avez pas de compte ?<span><a href="Rejoinez-nous"> INSCRIPTION</a></span></p>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>