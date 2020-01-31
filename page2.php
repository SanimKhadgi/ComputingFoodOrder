            <?php             
                  session_start();
                  
                  include'connect.php'; 
                   $id=  $_SESSION['id'];  



                   ?>

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
  
  <title>Conform</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
 <?php   include'nav.php';   ?>

<section class="engine"><a href="https://mobirise.info/i">site creation software</a></section><section class="section-table cid-ruoUeu9uZH" id="table1-d">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Order Here</h2>
      
      <div class="table-wrapper">
        <div class="container">
          
        </div>

        <div class="container scroll">
          <table class="table" cellspacing="0">
            <thead>
              <tr class="table-heads ">
              <th class="head-item mbr-fonts-style display-7">Food Name</th>
              <th class="head-item mbr-fonts-style display-7">Quntity</th>
              <th class="head-item mbr-fonts-style display-7">Rate</th>
              <th class="head-item mbr-fonts-style display-7">total</th></tr>
            </thead>

            <tbody>
              <?php   
                   
                 $getdata = "select * from food_keshav where id = $id";

                $que = mysqli_query($con, $getdata);

                while($fil = mysqli_fetch_array($que)){

                $id = $fil['id'];

                $heading =$fil['heading'];

                $sub_heading =$fil['sub_heading'];

                $content =$fil['content'];

                $image = $fil['picture'];

                $content_2=substr($content,0,200) ;

                 ?>

                
            <tr>

              
              <td class="body-item mbr-fonts-style display-7"><?php  echo $heading;  ?></td>
              <td class="body-item mbr-fonts-style display-7"><a class="btn btn-sm  btn-primary" href="session1.php">-</a><?php echo $_SESSION['qty'];  ?><a class="btn btn-sm  btn-primary" href="session.php" >+</a></td>
              <td class="body-item mbr-fonts-style display-7"><?php echo $sub_heading;   ?>/-</td>
              <td class="body-item mbr-fonts-style display-7"><?php echo  $sub_heading * $_SESSION['qty']  ;  ?>/-</td>
            </tr>
             <?php   } ?>
                
             
           <td class="body-item mbr-fonts-style display-7"></td>
            </tr>
          </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          
        </div>
      </div>
    </div>
</section>

<section class="features3 cid-ruoVQbzg7e" id="features3-e">

    

    
    <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6">
                <div class="card-wrapper">
                    
                    <div class="card-box">
                        
                        
                    </div>
                    <div class="mbr-section-btn text-center">
                      <a href="<?php
                        include'error_hide.php';
                        if ($_SESSION['user'] ==''){
                          echo'login.php';
                        }
                        else{
               
                       
                           echo'pre_cart.php';
                        }

                        ?>"
                         class="btn btn-primary display-4">
                    Add to cart
                  </a><a href="page3.php" class="btn btn-primary display-4">Confirm Order</a></div>
                    
                </div>
            </div>

            

            

            
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
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>