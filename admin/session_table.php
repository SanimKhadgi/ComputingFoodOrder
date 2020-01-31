<?php    

session_start();
$_SESSION['table']=$_GET['id'];
header('location:new_post.php');

echo"hello there";



 ?>