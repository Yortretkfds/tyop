<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"></rel>
    <link rel="stylesheet" href="sponsor.css"></rel>
    <title>Co</title>
</head>
<header>
    <nav>
      <ul>
        <li><a href="index.php">Bad'As</a></li>
        <li><a href="taxi.php">Taxi</a></li>
        <li><a href="sos.php">SOS</a></li>
        <li><a href="planning.php">Planning</a></li>
        <li><a href="sponsor.php">Sponsor</a></li>
        <li style="float:right"><a href="connexion.php">Connexion</a></li>
        <?php
        session_start();

        if (isset($_SESSION['loggedin'])) {
        ?>
          <li><a href="logout.php">Déconnexion</a></li>
        <?php
        }
        ?>
      </ul>
    </nav>
</header>
<body>
  <div class="container">
    <div class="block">
        <img src="img/Mbowling.png" alt="Metro Bowling">
        <p> Restez jeune… jouez au bowling </p>
        <p>17 boulevard Victor Hugo, 59000 Lille </p> 
        <p>Tél : 03 20 52 70 80 </p>
        <p>Mail : lillemetrobowling@gmail.com </p>
        <p>site : www.metrobowlinglille.fr </p>
        </p>
    </div>
  </div>
</body>