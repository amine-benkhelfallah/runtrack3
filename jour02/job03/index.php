<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <button id="button">Ajouter 1</button>

        <p id="compteur">0</p>
        <script>
            var count = 0;
            var button = document.getElementById("button");
            var counter = document.getElementById("compteur");
            button.addEventListener("click", addone);

            function addone() {
                count++;
                counter.innerHTML = count;
            }
        </script>








</body>
</html>