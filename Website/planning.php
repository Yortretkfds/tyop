<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"></rel>
    <link rel="stylesheet" href="planning.css"></rel>
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
    <div class="container">
        <table>
        <tr>
            <th>Heures</th>
            <th>Jeudi</th>
            <th>Vendredi</th>
            <th>Samedi</th>
            <th>Dimanche</th>
        </tr>
        <tr>
            <td>9h - 10h</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>10h - 11h</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>11h - 12h</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>12h - 13h</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>13h - 14h</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>14h - 15h</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>15h - 16h</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>16h - 17h</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>17h - 18h</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>18h - 19h</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <!-- autres heures -->
        </table>
    </div>
</body>
</html>