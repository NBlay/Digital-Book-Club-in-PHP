<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/liste.css">
    <link rel="stylesheet" href="css/topnav.css">
    <title>Inscription</title>
</head>
<body>
    <?php require 'templates/topmenu.php' ?>
    <main>
        <form action="controllers/connexion.php" method="POST">
            <div>
                <label for="name">User :</label>
                <input type="text" placeholder="Utilisateur" name="name">
            </div>
            <div>
                <label for="password">Password : </label>
                <input type="password" name="password">
            </div>
            <input type="submit" value="Connexion!">
        </form>
    </main>
    <?php require_once 'templates/footer.php' ?>
</body>
</html>
