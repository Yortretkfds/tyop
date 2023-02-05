<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="consolas/Consolas.ttf" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"></rel> -->
    <link rel="stylesheet" href="sos.css"></rel>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Co</title>
</head>
<header>
    <nav>
        <ul class='nav-bar'>
            <a id="name" href="">Noktilas</a>
            <li class='logo'><a href='#'><img src='./img/loup.png'/></a></li>
            <input type='checkbox' id='check' />
            <span class="menu">
                <li><a href="index.php">Bad'As</a></li>
                <li><a href="taxi.php">Taxi</a></li>
                <li><a href="sos.php">SOS</a></li>
                <li><a href="planning.php">Planning</a></li>
                <li><a href="sponsor.php">Sponsor</a></li>
                <li style="float:right"><a href="connexion.php">Connexion</a></li>
                <?php
                if (isset($_SESSION['loggedin'])) {
                ?>
                <li><a href="logout.php">Déconnexion</a></li>
                <?php
                }
                ?>
                <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
            </span>
            <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
        </ul>
    </nav>
</header>
  
<body>
    <div class="block">
    <h1>Listes de tout nos packs :</h1>
    </div>

    <div class="block">
    <h1>Crépuscule</h1>
    <hr/>
    <ul>
        <li>Saucisson</li>
    </ul>
    </div>

    <div class="block">
    <p>Contenu du bloc 2</p>
    </div>
    <script>
        const buttons = document.querySelectorAll("button");
            buttons.forEach(button => {
            button.addEventListener("click", () => {
            if (confirm("Souhaitez-vous appeler ce numéro?")) {
                window.location = "tel:+333613760191";
            }
        });
    });
    </script>
</body>
</html>