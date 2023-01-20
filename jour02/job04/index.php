<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<textarea id="keylogger"></textarea>
<script>
    var textarea = document.getElementById("keylogger");
    document.addEventListener("keypress", function(event) {
        if (event.keyCode >= 97 && event.keyCode <= 122) {
            if (document.activeElement === textarea) {
                textarea.value += event.key + event.key;
            } else {
                textarea.value += event.key;
            }
        }
    });
</script>


</body>
</html>