<?php   
session_start();

include('connect.php');
echo $get = $_SESSION['show'];
echo $id = $_GET['id'];
$getdat = "DELETE FROM `$get` WHERE id=$id";
mysqli_query($con,$getdat);
header("location:single_table_posts.php");





?>