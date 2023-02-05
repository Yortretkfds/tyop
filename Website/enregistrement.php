<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"></rel>
    <title>Co</title>
</head>
<header>
<nav>
      <ul>
        <li><a href="taxi.php">Titre 1</a></li>
        <li><a href="#">Titre 2</a></li>
        <li><a href="#">Titre 3</a></li>
        <li><a href="#">Titre 4</a></li>
        <li style="float:right"><a href="connexion.php">Connexion</a></li>
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

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $place = $_POST['place'];
    $heure = $_POST['heure'];

    if ($place == "2") {
      $adresse = $_POST['address'];
    } else {
        $adresse = $place;
    }

    // validate the form data
    if (empty($prenom) || empty($nom) || empty($tel)|| empty($adresse) || empty($heure)) {
      echo "Please fill in all the fields.";
    } else {

      $sql = "INSERT INTO taxi (prenom, nom, tel, place, heure)
      VALUES ('$prenom', '$nom', '$tel', '$adresse', '$heure')";
      
      if ($conn->query($sql) === TRUE) {
      header("Location: index.php");
      echo "Nouvel enregistrement créé avec succès";
      } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
    
    $conn->close();
    ?>
</body>
</html>