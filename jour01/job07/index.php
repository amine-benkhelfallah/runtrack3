<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>runtrack3-jour01</title>
    <script src="script.js"></script>
</head>


<h1>Créez une fonction “jourtravaille”</h1>
    <p>“jourtravaille” qui prend en paramètre une date au format Date. Si la
date correspond à un jour férié de l’année 2020, la fonction affiche “Le $jour $mois
$année est un jour férié”. Si elle correspond à un samedi ou un dimanche, alors le
message affiché est “Non, $jour $mois $année est un week-end”, sinon afficher “Oui,
$jour $mois $année est un jour travaillé”.

$jour correspond au numéro du jour, $mois au mois et $année à l’année. Les jours fériés
sont référencés sur
https://demarchesadministratives.fr/actualites/calendrier-des-jours-feries-2019-2020-2
021</p>

<body>
<input type="date" id="date">
  <button type="button" onclick="jourTravaille()">Vérifier si le jour est férié</button>
</body>
</html>