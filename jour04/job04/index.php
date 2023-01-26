<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch jour04 job04</title>
    

</head>

<body>
    <h3>Jour04 job04</h3>
    <H3>Fetch</H3>
    <p>Créez une base de données “utilisateurs” contenant une table “utilisateurs” et ayant
comme champs “id”, “nom”, “prenom” et “email”. <br>
Ajoutez des utilisateurs directement dans phpmyadmin.<br>
Créez une page users.php qui se connecte à la base de données, récupère l’ensemble
des utilisateurs et affiche ces informations au format json.<br>
Dans votre page index.php, créez un tableau <"table"> permettant de contenir ces
informations ainsi qu’un <"button"> “update”. <br>Lorsque l’on clique sur ce bouton, le tableau
doit se mettre à jour et contenir l’ensemble des informations des utilisateurs présents
dans la base de données.<br>
Vous pouvez tester votre code en ajoutant/supprimant des utilisateurs à l’aide de
phpmyadmin entre deux clics.</p>


    <h3>Récupration de données de la base de données avec Fetch</h3>
    <div class="container">
        <button id="update">Mettre à jour</button>
        <table id="utilisateurs">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    
    </div> <!-- /container -->
    <script src="script.js"></script>
</body>
</html>
