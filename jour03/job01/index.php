<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Découverte de jQUERY</title>
    <script src="jquery-3.6.3.js"></script>
</head>


    <body>
    
    <button id="show-text">Afficher le texte</button>
    <p>“Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit,ensuite on prie.”</p>
       
        <script>
            $("#show-text").click(function() {
                $("body").append("<p>Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit, ensuite on prie.</p>");
            });

        </script>
    <button id="hide-text">Cacher le texte</button>

        <script>
            $("#hide-text").click(function() {
            $('p').hide();
        });
        </script>
    </body>
</html>