<?php   


include('connect.php');
 $id = $_GET['id'];
$getdat = "DELETE FROM order_keshav WHERE id=$id";
mysqli_query($con,$getdat);
header("location:show_order.php");





?>