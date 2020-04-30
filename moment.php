<?php session_start();
if(isset($_SESSION['name'])==false){
    header('Location: /form.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <link rel="stylesheet" href="css/topnav.css">
        <link rel="stylesheet" href="css/moment.css">
        <meta charset="utf-8">
        <title>Mon livre du moment</title>
    </head>

    <body>
        <?php require 'templates/topmenu.php' ?>
        <h1> Le livre que vous dévorez en ce moment est:</h1>

        <p class="titre">Hellraiser</p>
        <div class='general'>
            <img src="imgs/moment.jpg" height="350px" width="250px" alt="Hellraiser">
            <p class="summary">A la recherche du plaisir absolu, un jeune homme réalise sans le savoir un pacte avec des entités démoniaques, pour qui le plaisir ne peut aller qu'avec la souffrance.</p>

        <?php if ($_SESSION['year']) : ?>
            <p class="year"> Paru en 1986</p>
        <?php endif ?>

        <?php if ($_SESSION['genre']) : ?>
            <p class="genre"> Genre: Horreur</p>
        <?php endif ?>

        <?php if ($_SESSION['target']) : ?>
            <p class="target"> Adulte (+18)</p>
        <?php endif ?>

        <?php if ($_SESSION['author']) : ?>
            <p class="author"> Ecrit par: Clive Barker</p>
        <?php endif ?>

        </div>
        <?php require_once 'templates/footer.php' ?>
    </body>
</html>
