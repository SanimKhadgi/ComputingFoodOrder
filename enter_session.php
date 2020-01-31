<?php


session_start();

$_SESSION['user'] = $_GET['id'];

header('location:index.php'); 



      ?>