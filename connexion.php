<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
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
