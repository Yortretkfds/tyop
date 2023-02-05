<?php
session_start();
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

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['loggedin'] = true;
        // Rediriger l'utilisateur vers la page de bienvenue
        header("Location: admin.php");
        exit;
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect";
    }
    $conn->close();
}
?>