<?php   


include('connect.php');
 $id = $_GET['id'];
$getdat = "DELETE FROM cart_keshav WHERE id=$id";
mysqli_query($con,$getdat);
header("location:your_cart.php");





?>