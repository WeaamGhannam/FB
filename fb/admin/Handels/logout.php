<?php 
session_start();
unset($_SESSION['login']);
unset($_SESSION['name']);

session_destroy();

header('location: ../login.php');
?>