<?php session_start(); ?>
<link rel="stylesheet" href="topnav.css">
<header>
    <nav>
        <ul class="topnav">
            <li class="topnav"><a href="/">Accueil</a></li>
            <li class="topnav"><a href="liste.php">Les livres de la semaine</a></li>

        <?php if (isset($_SESSION['name'])) : ?>
            <li class="topnav"><p><?= $_SESSION['name']?></p>
            <li class="topnav "><a href="profil.php">Profil</a></li>
            <li class="topnav "><a href="moment.php">Mon livre du moment</a></li>
            <li class="topnav "><a href="logout.php">Déconnexion</a></li>

        <?php else : ?>
            <li class="topnav"><a href="form.php">Inscription</a></li>
        <?php endif ?>

        </ul>
    </nav>
</header>
