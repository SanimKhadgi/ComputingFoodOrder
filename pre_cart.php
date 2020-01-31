<?php
  include'error_show.php';


 				  session_start();
                  
                  include'connect.php'; 
                   $id=  $_SESSION['id'];  

                   
                 $getdata = "select * from food_keshav where id = $id";

                $que = mysqli_query($con, $getdata);

                while($fil = mysqli_fetch_array($que)){

                $id = $fil['id'];

                $heading =$fil['heading'];

                $sub_heading =$fil['sub_heading'];

                $content =$fil['content'];

                $image = $fil['picture'];

                $content_2=substr($content,0,200) ;

                 }

                echo $email = $_SESSION['email'];
                 
		       $content = $_SESSION['qty'];
          $insert = "INSERT INTO cart_keshav(email,heading,sub_heading,content,picture) values('$email','$heading','$sub_heading','$content','$image')";
        $rr=  mysqli_query($con,$insert) ; 
       
         header('location:your_cart.php');
        
        

  ?>