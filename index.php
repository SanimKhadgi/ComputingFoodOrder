<?php   session_start();



   ?>
<!DOCTYPE>
<php  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.4, https://mobirise.com -->
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
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<?php   include'nav.php';   ?>

<section class="engine"><a href="https://mobirise.info/s"></a></section><section class="carousel slide cid-ruoZ56mZH4" data-interval="false" id="slider1-p">

    

    <div class="full-screen"><div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="4000"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#slider1-p" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider1-p" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider1-p" class=" active" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#slider1-p" data-slide-to="3"></li></ol><div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/586118578-food-wallpaper-2000x1250.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="assets/images/586118578-food-wallpaper-2000x1250.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">Sea Food</h2><p class="lead mbr-text mbr-fonts-style display-5">See Food are Good for Health</p><div class="mbr-section-btn" buttons="0"> <a class="btn  display-4 btn-primary" href="index.php#contacts2-t">Contact</a></div></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/animated-pancakes-wallpaper-1-2000x1250.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="assets/images/animated-pancakes-wallpaper-1-2000x1250.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">Veg Roll</h2><p class="lead mbr-text mbr-fonts-style display-5">Veg Rool : Delicious</p><div class="mbr-section-btn" buttons="0"><a class="btn btn-primary display-4" href="index.php#contacts2-t">Contact</a> </div></div></div></div></div></div><div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/6846485-food-wallpaper-1920x1080.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="assets/images/6846485-food-wallpaper-1920x1080.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">Cake</h2><p class="lead mbr-text mbr-fonts-style display-5">It's A Food Best Product</p><div class="mbr-section-btn" buttons="0"> <a class="btn  display-4 btn-primary" href="index.php#contacts2-t">contact</a></div></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/818747-bakery-wallpapers-1920x1080-for-ipad-2-1920x1080.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="assets/images/818747-bakery-wallpapers-1920x1080-for-ipad-2-1920x1080.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">Cake</h2><p class="lead mbr-text mbr-fonts-style display-5">Chocolate Cake</p><div class="mbr-section-btn" buttons="0"> <a class="btn  display-4 btn-primary" href="index.php#contacts2-t">Contact</a></div></div></div></div></div></div></div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-p"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-p"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a></div></div>

</section>

<section class="features3 cid-rusGBvjQVv" id="features3-y">
    <div class="container">
    <div class="row"  >

<?php 



include'connect.php';    
 $getdata = 'select * from food_keshav';

$que = mysqli_query($con, $getdata);

while($fil = mysqli_fetch_array($que)){

$id = $fil['id'];

$heading =$fil['heading'];

$sub_heading =$fil['sub_heading'];

$content =$fil['content'];

$image = $fil['picture'];

$content_2=substr($content,0,200) ;


 ?>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img border border-dar">
                        <img src="admin/images/<?php echo $image; ?>" alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7"><?php echo $heading; ?></h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                           <?php echo $content; ?>
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center"><a href="product_id.php?id=<?php echo $id;  ?>" class="btn btn-primary display-4">Order now</a></div>
                </div>
            </div>

<?php  }  ?> 

        </div>
    </div>


           
<section class="cid-ruoZ7VN8rc" id="social-buttons3-s">
    
    

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <h2 class="pb-3 mbr-section-title mbr-fonts-style display-2">
                    SHARE THIS PAGE!
                </h2>
                <div>
                    <div class="mbr-social-likes">
                        <span class="btn btn-social socicon-bg-facebook facebook mx-2" title="Share link on Facebook">
                            <i class="socicon socicon-facebook"></i>
                        </span>
                        <span class="btn btn-social twitter socicon-bg-twitter mx-2" title="Share link on Twitter">
                            <i class="socicon socicon-twitter"></i>
                        </span>
                        <span class="btn btn-social plusone socicon-bg-googleplus mx-2" title="Share link on Google+">
                            <i class="socicon socicon-googleplus"></i>
                        </span>
                        <span class="btn btn-social vkontakte socicon-bg-vkontakte mx-2" title="Share link on VKontakte">
                            <i class="socicon socicon-vkontakte"></i>
                        </span>
                        <span class="btn btn-social odnoklassniki socicon-bg-odnoklassniki mx-2" title="Share link on Odnoklassniki">
                            <i class="socicon socicon-odnoklassniki"></i>
                        </span>
                        <span class="btn btn-social pinterest socicon-bg-pinterest mx-2" title="Share link on Pinterest">
                            <i class="socicon socicon-pinterest"></i>
                        </span>
                        <span class="btn btn-social mailru socicon-bg-mail mx-2" title="Share link on Mailru">
                            <i class="socicon socicon-mail"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section contacts2 cid-ruoZ8uOZ2z mbr-parallax-background" id="contacts2-t">
    <!---->
    
    <!---->
    <!--Overlay-->
    <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(239, 239, 239);">
    </div>
    <!--Container-->
    <div class="container">
        <div class="row">
            <!--Titles-->
            <div class="title col-12">
                <h2 class="align-left mbr-fonts-style display-2">Contact Us</h2>
                
            </div>
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-4">
                        <div class="b b-adress">
                            <h5 class="align-left mbr-fonts-style m-0 display-5">
                                Address:
                            </h5>
                            <p class="mbr-text align-left mbr-fonts-style display-7">
                                New Baneshwor, Kathmandu</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="b b-phone">
                            <h5 class="align-left mbr-fonts-style m-0 display-5">
                                Phone:
                            </h5>
                            <p class="mbr-text align-left mbr-fonts-style display-7">
                                +97798613122</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="b b-mail">
                            <h5 class="align-left mbr-fonts-style m-0 display-5">
                                E-mail:
                            </h5>
                            <p class="mbr-text align-left mbr-fonts-style display-7">sanim123@gmail.com</p>
                            <?php include'copyright.php';   ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/sociallikes/social-likes.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  
  
</body>
</php>