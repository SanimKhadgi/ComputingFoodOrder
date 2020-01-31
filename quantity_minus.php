<?php  
 			include'connect.php';
 				$id = $_GET['id']; 
				 $getdata = "select * from cart_keshav where id=$id";

                  $que = mysqli_query($con, $getdata);

                  while($fil = mysqli_fetch_array($que)){

                  $id = $fil['id'];

                  $heading =$fil['heading'];

                  $sub_heading =$fil['sub_heading'];

                  $content =$fil['content'];

                  $image = $fil['picture'];

              }

           $content = $content - 1 ;
           if($content <= 1){$content=1;}

 

  $update = "UPDATE cart_keshav  SET content = '$content' WHERE id = '$id'";
  $query = mysqli_query($con,$update);
 

 header('location:your_cart.php');


?>