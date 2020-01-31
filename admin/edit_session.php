<?php   

session_start();
$_SESSION['edit_data']=$_GET['id'];
header("Location:edit.php");

  ?>