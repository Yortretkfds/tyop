<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css"></rel>
    <title>Co</title>
</head>
<body>
    <div id="building">
    <img src="img/test.jpg" alt="Building">
    <div id="door"></div>
    <div id="taxi"></div>
    </div>
    <script>
    document.getElementById("door").addEventListener("click", function() {
    window.location.href = "index.php";
    });

    document.getElementById("taxi").addEventListener("click", function() {
    window.location.href = "taxi.php";
    });

    document.getElementById("door").addEventListener("mouseover", function() {
    document.querySelector("img").src = "img/ouvert.png";
    });

    document.getElementById("door").addEventListener("mouseleave", function() {
    document.querySelector("img").src = "img/test.jpg";
    });
</script>
</body>
</html>