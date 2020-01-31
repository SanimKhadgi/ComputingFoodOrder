<?php    

session_start();
echo $_SESSION['show']=$_GET['id'];
if ($_GET['id']=='customers_keshav'){header('location:customers.php');}
//header('location:single_table_posts.php');

else{header('location:single_table_posts.php');}



 ?>