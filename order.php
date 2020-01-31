<?php   
      session_start();
     $id= $_SESSION['email'];
     include'connect.php';
     $getdata = "SELECT * FROM `cart_keshav` WHERE  email='$id'";
     $query = mysqli_query($con,$getdata);
     while($ver = mysqli_fetch_array($query)){

    $food_name=$ver['heading'];
    $price=$ver['sub_heading'];
    $qty=$ver['content'];
    $picture=$ver['picture'];

    $data = "SELECT * FROM `customers_keshav` WHERE  email='$id'";
    $qry = mysqli_query($con,$data);
    $ary = mysqli_fetch_array($qry);
    $name = $ary['name'];
    $address = $ary['address'];
    $mobile = $ary['mobile'];
    $odate = date("Y-m-d h:i:sa");
    $email = $_SESSION['email'];
    $insert= "INSERT INTO oerder_keshav(customer_name,email,food_name,qty,price,picture,address,mobile,odate) VALUES('$name','$email','$food_name','$qty','$price','$picture','$address','$mobile','$odate')";
     $ss=mysqli_query($con,$insert);

  
     }





if($ss){

  header('location:page3.php');


}

else{

echo'sorry';
}



?>