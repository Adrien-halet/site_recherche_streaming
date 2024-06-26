<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_recherche_streaming";

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
    <form action="authenticate.php" method="post">
        <label for="email">Email :</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
