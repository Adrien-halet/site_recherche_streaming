<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utilisateur";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['username'];
$pass = $_POST['password'];

// Préparation et exécution de la requête
$sql = $conn->prepare("SELECT * FROM utilisateurs WHERE username = ?");
$sql->bind_param("s", $user);
$sql->execute();
$result = $sql->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Vérification du mot de passe
    if (password_verify($pass, $row['password'])) {
        $_SESSION['username'] = $user;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Mot de passe incorrect.";
    }
} else {
    echo "Nom d'utilisateur incorrect.";
}

$conn->close();
?>
