<?php
session_start();
$name = $_POST['name'];
$password = $_POST['password'];

$user="Neo";
$password="trinity";

if($_POST['name'] == $user && $_POST['password'] == $password){
        $_SESSION['name'] = $_POST['name'];
        header ('Location: /');
        exit;
} else {
        $_SESSION['twice']=$name;
        header ('Location: /form.php');

        }


$_SESSION['name']=$_POST['name'];
//var_dump($_SESSION['name']);
//header ('Location: /');
