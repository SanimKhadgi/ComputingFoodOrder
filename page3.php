<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-122x122.png" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">
  
  <title>Page 3</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
 <?php  
 session_start();

  include'nav.php'; 

    ?>

<section class="engine"><a href="https://mobirise.info/m"></a></section><section class="countdown2 cid-ruoXdw1lqN" id="countdown2-h">

    

    

    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
            Ordered &nbsp;Successfully</h2>
        <h3 class="mbr-section-subtitle align-center mbr-fonts-style display-5">your order submitetd sucssfully visit again buy more <br><br>your order</h3>
    </div>








<div class="container">

 <table class="table" cellspacing="0">
            <thead>
              <tr >
              <th class="head-item mbr-fonts-style display-7">Food Name</th>
              <th class="head-item mbr-fonts-style display-7">Quntity</th>
              <th class="head-item mbr-fonts-style display-7">Rate</th>
              <th class="head-item mbr-fonts-style display-7">total</th>
              <th class="head-item mbr-fonts-style display-7">contact</th>
              <th class="head-item mbr-fonts-style display-7">address</th>
               <th class="head-item mbr-fonts-style display-7">Cancel</th>
             </tr>
            </thead>

            <tbody>
              <?php  
                include'connect.php'; 
                $email=$_SESSION['email'];
                $getdata = "SELECT * FROM `oerder_keshav` WHERE  email='$email'";

                  $que = mysqli_query($con, $getdata);

                  while($fil = mysqli_fetch_array($que)){

                  $id = $fil['id'];
                  $name = $fil['food_name'];

                  $qty =$fil['qty'];

                  $price =$fil['price'];

                  $address =$fil['address'];
                  $mobile =$fil['mobile'];

                  $image = $fil['picture'];

                 

                 
                 ?>


                
            <tr>

              
              <td class="body-item mbr-fonts-style display-7"><?php  echo $name;  ?> </td>
              <td class="body-item mbr-fonts-style display-7"><?php echo $qty; ?></td>
              <td class="body-item mbr-fonts-style display-7"><?php echo $price;   ?>/-</td>
               <td class="body-item mbr-fonts-style display-7"><?php echo $price * $qty   ?>/-</td>
               <td class="body-item mbr-fonts-style display-7"><?php echo $mobile;   ?></td>
                <td class="body-item mbr-fonts-style display-7"><?php echo $address;   ?></td>
            
              <td class="body-item mbr-fonts-style display-7"><a href="order_delete.php?id=<?php echo $id ; ?>" class="btn btn-sm btn-primary">Cancel</a></td>
            </tr>
         
             <?php   } ?>
                <?php 

            $sum="SELECT SUM(Price*qty) AS total FROM oerder_keshav WHERE email='$email' ";
            $qq = mysqli_query($con,$sum);
            $are = mysqli_fetch_array($qq);
            $ttl = $are['total'];

             ?>
                
             
           <th class="head-item mbr-fonts-style display-7">Grand Total</th>
           <th class="head-item mbr-fonts-style display-7"></th>
           <th class="head-item mbr-fonts-style display-7"></th>
           <th class="head-item mbr-fonts-style display-7"><?php echo  $ttl;  ?>/-</th>
           <?php// echo $price * $qty  ;  ?>


            </tr>
          </tbody>
          </table>
        </div>






    <div class="container pt-5 mt-2">
     

        <div class="media-container-row ">
            <div class="mbr-section-btn align-center"><a class="btn btn-primary display-4" href="index.php">Home</a>
                <a class="btn btn-black-outline display-4" href="index.php">Buy more</a></div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/countdown/jquery.countdown.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>