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

<section class="engine"><a href="https://mobirise.info/i"></a></section><section class="section-table cid-ruoUeu9uZH" id="table1-d">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Your cart </h2>
      
      <div class="table-wrapper">
        <div class="container">
          
        </div>

        <div class="container scroll">
          <table class="table" cellspacing="0">
            <thead>
              <tr >
              <th class="head-item mbr-fonts-style display-7">Food Name</th>
              <th class="head-item mbr-fonts-style display-7">Quntity</th>
              <th class="head-item mbr-fonts-style display-7">Rate</th>
              <th class="head-item mbr-fonts-style display-7">total</th>
               <th class="head-item mbr-fonts-style display-7">Delete</th>
             </tr>
            </thead>

            <tbody>
              <?php   
                $email=$_SESSION['email'];
                $getdata = "select * from cart_keshav where email='$email'";

                  $que = mysqli_query($con, $getdata);

                  while($fil = mysqli_fetch_array($que)){

                  $id = $fil['id'];
                  $email = $fil['email'];

                  $heading =$fil['heading'];

                  $sub_heading =$fil['sub_heading'];

                  $content =$fil['content'];

                  $image = $fil['picture'];

                  $content_2=substr($content,0,200) ;

                 
                 ?>


                
            <tr>

              
              <td class="body-item mbr-fonts-style display-7"><?php  echo $heading;  ?> </td>
              <td class="body-item mbr-fonts-style display-7"><a class="btn btn-sm  btn-primary" href="quantity_minus.php?id=<?php echo $id;  ?>">-</a><?php echo $content; ?><a class="btn btn-sm  btn-primary" href="quantity_plus.php?id=<?php echo $id;   ?>" >+</a></td>
              <td class="body-item mbr-fonts-style display-7"><?php echo $sub_heading;   ?>/-</td>
              <td class="body-item mbr-fonts-style display-7"><?php echo  $sub_heading * $content  ;  ?>/-</td>
              <td class="body-item mbr-fonts-style display-7"><a href="delete_cart.php?id=<?php echo $id ; ?>" class="btn btn-sm btn-primary">Delete</a></td>
            </tr>
             <?php   } ?>
            <?php   
            $sum="SELECT SUM(content*sub_heading) AS total FROM cart_keshav WHERE email='$email' ";
            $qq = mysqli_query($con,$sum);
            $are = mysqli_fetch_array($qq);
            $ttl = $are['total']; 
            ?>
             
           <th class="head-item mbr-fonts-style display-7">Total</th>
           <td></td>
           <td></td>
           <td><h5><b><?php echo $ttl;   ?></b></h5></td>


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
               
                     <div class="mbr-section-btn text-center"><a href="order.php?id=<?php echo $email; ?>" class="btn btn-primary display-4">Place order</a>
                      <a href="index.php" class="btn btn-primary display-4">Buy more</a></div>
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