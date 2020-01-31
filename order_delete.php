<?php   


include('connect.php');
 $id = $_GET['id'];
$getdat = "DELETE FROM `oerder_keshav` WHERE id=$id";
mysqli_query($con,$getdat);
header("location:page3.php");




?>