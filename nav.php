 
<?php  include'error_hide.php'; ?>
  <section class="menu cid-ruoZ4KBhVm" once="menu" id="menu2-o">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                        <img src="assets/images/logo-122x122.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="page4.php">HELP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.php#contacts2-t">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.php#contacts2-t">CONTACT</a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link link text-white display-4"><?php  
                    if ($_SESSION['user'] != ''){

                    echo 'welcome'.' : '.$_SESSION['user'];


                    }  ?>


                     </a>
                    
                </li>

                   <li class="nav-item">
                    <a   class="nav-link link text-white display-4" href="your_cart.php"><?php if ($_SESSION['user'] != ''){

                    echo 'your cart';

                    } ?> </a>
                </li>
                 <li class="nav-item">
                    <a   class="nav-link link text-white display-4" href="page3.php"><?php if ($_SESSION['user'] != ''){

                    echo 'Your Order';

                    } ?> </a>
                </li>
            </ul>


            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-white-outline display-4" href="<?php
               
                if($_SESSION['user'] != ''){echo'logout.php';}
                 if($_SESSION['user'] == ''){echo'login.php';}


             ?>">
                    <?php
                   
                    if($_SESSION['user'] != '')
                        {
                            echo "log out";


                         } 
                    else
                        {echo"Login";}



                     ?>

           



        </a></div>
        </div>
    </nav>
</section>
<?php  error_reporting(E_ALL);
ini_set('display_errors', 1);  ?>