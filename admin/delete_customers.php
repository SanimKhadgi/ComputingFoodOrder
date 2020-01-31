<?php   
session_start();

include('connect.php');
 $id = $_GET['id'];

$getdat = "DELETE FROM `customers_keshav`  WHERE id=$id";
mysqli_query($con,$getdat);


header("location:customers.php");



?>