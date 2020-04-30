<?php
session_start();
$name = $_POST['name'];
$password = $_POST['password'];

$_SESSION['name'] = $name;

header('Location: /');
