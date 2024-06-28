<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une recette</title>
</head>
<body>
    <h1>Bonjour Nom de l'admin Bienvenue</h1>
    <form action="">
        <label for="titre">Nom de la recette :</label><br>
        <input type="text" name="title" placeholder="Ex: Koki" ><br>

        <label for="description">Description :</label><br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea><br>

        <label for="ingredients">Ingredients :</label><br>
        <input type="text" name="ingredient"><br>

        <label for="preparation">Preparation :</label><br>
        <input type="text" name="preparation"><br>

        <label for="cuisson">Temps de cuisson</label><br>
        <input type="text" name="temps_de_cuisson"><br>

        <button class="envoie" type="submit">Ajouter la Recette</button>

    </form>
</body>
</html>