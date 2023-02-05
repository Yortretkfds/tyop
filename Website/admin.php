<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: connexion.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"></rel>
    <link rel="stylesheet" href="admin.css"></rel>
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
    <?php  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "asliste";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM taxi";
    $result = $conn->query($sql);
        
    if ($result->num_rows > 0) {
        
        echo "<table><tr><th>Prénom</th><th>Nom</th><th>Téléphone</th><th>Place</th><th>Heure</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["prenom"]. "</td><td>" . $row["nom"]. "</td><td>" . $row["tel"]. "</td><td>" . $row["place"]. "</td><td>" . $row["heure"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</body>
</html>