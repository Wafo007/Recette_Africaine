<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="instructions">Bonjoours la recttes recherche est</div>
    @foreach ($recettes as $recette) 
    @if ($recette->title == NULL)
        
    <p>Aucune recette trouve</p>
        
    @else
        <p>{{ $recette -> title }}</p>
        <div>{{ $recette-> description }}</div>
    
    @endif
    @endforeach

</body>
</html>