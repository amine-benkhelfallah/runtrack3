<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<button id="button" onclick="showhide()">Afficher/masquer l'article</button>

<script>
  function showhide() {
    var article = document.getElementById("citation");
    if (article.style.display === "none") {
      article.style.display = "block";
      article.innerHTML = "L'important n'est pas la chute, mais l'atterrissage.";
    } else {
      article.style.display = "none";
    }
  }
  var article = document.createElement("article");
  article.id = "citation";
  article.style.display = "none";
  document.body.appendChild(article);
</script>







</body>
</html>