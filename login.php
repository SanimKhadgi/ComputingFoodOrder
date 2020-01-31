<!DOCTYPE html>
<html lang="en">

<head>



<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-122x122.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">


    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Customers Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
                 <?php 
                 
                    session_start();
                    include'connect.php';
                    if(isset($_POST['login'])){
                      include'error_hide.php';
                     $mail = $_POST['mail'];
                     $pass = $_POST['pass'];

                      $data = "select * from customers_keshav where email ='$mail' and password = '$pass'";
                      $qry = mysqli_query($con,$data);
                      $arry = mysqli_fetch_array($qry);
                      $name = $arry['name'];
                     $num = mysqli_num_rows($qry);
                     
                    
                     if ($num >= 1){ $_SESSION['user'] = $name;

                          $_SESSION['email'] = $mail;
                         if($_SESSION['id'] !=''){
                      
                      header('location:your_cart.php');}
                     // header('location:your_cart.php');
                      
                      else{header('location:index.php');}
                     
                     }
                     else {
                     echo "<h4 style='text-align:center; color:red; padding-top:100px; padding-bottom:10px;'>Username or Password Incorrect !!...</h4>";
                     }

                    }
                   

                     ?>

                    <?php
                   
                    
                  
 

                   if(isset($_POST['signup'])){

                      $name = $_POST['name'];
                      $address = $_POST['address'];
                      $mobile = $_POST['mobile'];
                      $email = $_POST['email'];
                      $cemail = $_POST['cemail'];
                      $password = $_POST['password'];
                      $cpassword = $_POST['cpassword'];
                      $cdate = date("Y/m/d");
                      $insert = "INSERT INTO customers_keshav(name,cdate,email,password,mobile,address) values('$name','$cdate','$email','$password','$mobile','$address')";
                       if (filter_var($mail, FILTER_VALIDATE_EMAIL) == true){
                        echo "<h4 style='text-align:center; color:red; padding-top:100px; padding-bottom:10px;'>Invalid e-mail !!...</h4>";
                     }
                     $suc = mysqli_query($con,$insert) ; 
                     if($suc){
                      $_SESSION['user'] = $name;
                       $_SESSION['email'] = $email;
                     if ($_SESSION['id'] !=''){ header('location:page2.php');}
                     else{ header('location:index.php');}

                     }
                     else{
                      echo'somethin wrong';
                     }

                    }


                      ?>
  
    <?php   include'nav.php';  ?>
    
    

   <div class="page-wrapper bg-red p-t-30 p-b-30 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Sign in</h2>
                    <form method="POST" action="login.php">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="E-mail.." name="mail">
                        </div>
                        
                        
                        <div class="row row-space">
                            <div class="col-12">
                                <div class="input-group">
                                    <input class="input--style-2" type="password" placeholder="Password.." name="pass">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-30">
                            <input type="submit" name="login" class="btn btn--radius btn--green" value="sign in">
                        </div>
                    </form>


                    <br>
                    <br>
                    <br>
                    <br>
                      <h2 class="title">OR Sign up</h2>
 
                       <form method="POST" action="login.php">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Name" name="name">
                        </div>
                         <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="address" name="address">
                        </div>

                         <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="mobile- number" name="mobile">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="E-mail" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Confirm E-mail" name="cemail">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="password" name="password">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Confirm password" name="cpassword">
                        </div>
                    
                        <div class="p-t-30">
                            <input class="btn btn--radius btn--green" name ="signup" type="submit" value="submit">
                        </div>
                    </form>














                </div>
            </div>
        </div>
    </div>






    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->