<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/inscription.css">
    <title>Inscription</title>
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];


    // Établir une connexion à la base de données
    $servername = "localhost";
    $username = "root"; // Par défaut sur XAMPP
    $password_db = ""; // Par défaut sur XAMPP
    $dbname = "site_recherche_streaming";


    // Récupérer et valider les données du formulaire
    try {
        $conn = new PDO("mysql:host$servername;$dbname", $username, $password_db);
    // $UserID, $nom, $prenom, $age, $email, $password, $confirm_password);
        $conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "la connexion à bien été établie";
    }
    catch (PDOException $e){
        echo "la connexion à échoué:" . $e->getMessage();
    }
    if (isset($_POST['envoyer']))
    {
        $UserID = $_POST['UserID'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];     
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        $sql = "INSERT INTO 'users'('UserID', 'nom', 'prenom', 'age', 'email', 'password') VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";
        $stmt = $conn->prepare($sql);

        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        stmt->bindParam(':UserID, $UserID');
        stmt->bindParam(':nom, $nom');
        stmt->bindParam(':prenom, $prenom');
        stmt->bindParam(':age, $age');
        stmt->bindParam(':email, $email');
        stmt->bindParam(':password, $password');
        stmt->bindParam(':confirm_password, $confirm_password');
            if ($stmt->execute()) {
            echo "<p>Inscription réussie!</p>";
        } else {
            echo "<p>Erreur: " . $stmt->error . "</p>";
        }

    }

// Zone à exclure 

    
    // if (empty($errors)) {

    //     // Créer une connexion
    //     $conn = new mysqli($servername, $username, $password_db, $dbname);

    //     // Vérifier la connexion
    //     if ($conn->connect_error) {
    //         die("Connexion échouée: " . $conn->connect_error);
    //     }

    //     // Hacher le mot de passe
    //     $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    //     // Préparer et lier
    //     $stmt = $conn->prepare("INSERT INTO site_recherche_streaming (Nom, Prénom, Age, Email, Password) VALUES (?, ?, ?, ?, ?)");
    //     $stmt->bind_param("sssss", $nom, $prenom, $age, $email, $password_hashed);

    //     if ($stmt->execute()) {
    //         echo "<p>Inscription réussie!</p>";
    //     } else {
    //         echo "<p>Erreur: " . $stmt->error . "</p>";
    //     }

    //     $stmt->close();
    //     $conn->close();
    // } else {
    //     foreach ($errors as $error) {
    //         echo "<p style='color: red;'>$error</p>";
    //     }
    // }

    // Fin de la zone à exclure
}
?>
    <form action="inscription.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Entrer votre nom" required>
        

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prénom" required>

        <label for="age">Âge :</label>
        <input type="date" id="age" name="age" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="Entrer votre email" required>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" placeholder="Entrer votre mot de passe" required>

        <label for="confirm_password">Confirmation du mot de passe :</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Réecrivez votre mot de passe" required>

        <button type="submit" value="envoyer" name="envoyer">S'inscrire</button>
    </form>
</body>
</html>
