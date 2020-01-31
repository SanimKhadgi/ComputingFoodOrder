<?php   

include('connect.php');

echo  $id = $_GET['id'];
$getdat = "DELETE FROM `user` WHERE id=$id";
mysqli_query($con,$getdat);
header("location:edit_user.php");





?>