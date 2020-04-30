<?php
session_start();

$displayGenre = intval($_POST['genre']);
$displayYear = intval($_POST['year']);
$displayTar = intval($_POST['target']);
$displayAut = intval($_POST['author']);

$_SESSION['genre'] = $displayGenre;
$_SESSION['year'] = $displayYear;
$_SESSION['target'] = $displayTar;
$_SESSION['author'] = $displayAut;

header('Location: moment.php');
