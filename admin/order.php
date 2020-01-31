<?php  
     include'connect.php';

     $id= $_GET['id'];
     $getdata = "select * from cart_keshav id=$id";
                 // $que = mysqli_query($con, $getdata);

                  while($fil = mysqli_fetch_array($que)){

                  $id = $fil['id'];

                  $heading =$fil['heading'];

                  $sub_heading =$fil['sub_heading'];

                  $content =$fil['content'];

                  $image = $fil['picture'];

                  $content_2=substr($content,0,200) ;

                 }
                 

$insert= "INSERT INTO `oerder_keshav`(`id`, `customer_name`, `food_name`, `qty`, `price`, `picture`, `address`, `mobile`) VALUES ('$customer_name','$food_name','$qty','$price','$picture','$address','$mobile')";





?>