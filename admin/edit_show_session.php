<?php   

session_start();
$_SESSION['edit_id']=$_GET['id'];
header("Location:edit_show.php");


 ?>