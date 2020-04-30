<?php session_start();
if(isset($_SESSION['name'])==false){
    header('Location: /form.php');
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/topnav.css">
        <title>Mon Profil</title>
    </head>
    <body>
        <?php require_once "templates/topmenu.php" ?>
    <h1>Mon Profil</h1>

    <div class="infos">
        <img src="imgs/user.jpg" alt="keanu" height="150px" width="150px">
        <p class="prof">Bonjour Mr Neo Anderson</p></br>
    </div>

    <div class="misc">
        <p class="prof"> Vous êtes inscrit depuis le 15/09/2019</p>
        <p class="prof"> Votre genre favori est la SF</p>
        <p class="prof"> Vous avez lu 10 livres depuis le 01/01/2020</p>
    </div>

    <div class="formu">
        <form action="controllers/preferences.php" method="POST">
                <p>Votre livre du moment: </p>

                <p class="text">Afficher le genre ?</p>
                <label for="">oui</label>
                <input type="radio" name="genre" value="1" <?= $_SESSION['genre'] ? "checked" : "" ?>>
                <label for="">non</label>
                <input type="radio" name="genre" value="0" <?= !$_SESSION['genre'] ? "checked" : "" ?>>

                <p class="text">Afficher l'année de parution ?</p>
                <label for="">oui</label>
                <input type="radio" name="year" value="1" <?= $_SESSION['year'] ? "checked" : "" ?>>
                <label for="">non</label>
                <input type="radio" name="year" value="0" <?= !$_SESSION['year'] ? "checked" : "" ?>>

                <p class="text">Afficher l'âge cible ?</p>
                <label for="">oui</label>
                <input type="radio" name="target" value="1" <?= $_SESSION['target'] ? "checked" : "" ?>>
                <label for="">non</label>
                <input type="radio" name="target" value="0" <?= !$_SESSION['target'] ? "checked" : "" ?>>

                <p class="text">Afficher l'auteur ?</p>
                <label for="">oui</label>
                <input type="radio" name="author" value="1" <?= $_SESSION['author'] ? "checked" : "" ?>>
                <label for="">non</label>
                <input type="radio" name="author" value="0" <?= !$_SESSION['author'] ? "checked" : "" ?>>

                <input type="submit" name="valider" value="validé!" checked>
    </div>

        <?php require_once 'templates/footer.php' ?>




    </body>
</html>
