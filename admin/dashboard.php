<?php   
include'connect.php';



if ($_SESSION['login']=='') { 
  
    header('location:login.php');

}


 $result = mysqli_query($con,"SHOW TABLES");
  $page_num=mysqli_num_rows($result);
   




  $getdata = "select * from user";
  $que = mysqli_query($con, $getdata);
  $user_num = mysqli_num_rows($que);
 
 



?>

			   <a href="customers_order.php" class="bg-info list-group-item  ">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Customers Order
              </a>

			 <a href="pages.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <span class="badge"><?php  echo $page_num-4; ?></span></a>
             
              <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge"><?php echo $user_num ; ?></span></a>