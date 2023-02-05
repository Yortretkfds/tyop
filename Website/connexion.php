<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"></rel>
    <link rel="stylesheet" href="connexion.css"></rel>
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
    <form method="post" action="login.php">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Connexion">
    </form>
</body>