<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.9.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.9.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section id="menu-i">
<!-- navigatie start -->
    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="index.php" class="mbri-camera mbr-iconfont mbr-iconfont-menu navbar-logo"></a>
                        <a class="navbar-caption" href="index.php">Mambo Fotografie</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item"><a class="nav-link link" href="index.php">HOME</a></li><li class="nav-item"><a class="nav-link link" href="#gallery3-b">GALLERIJ</a></li>
                        <li class="nav-item"><a class="nav-link link" href="#over">OVER</a></li>
                      <?php if(!$_SESSION['Ingelogd']){ echo"<li class='nav-item nav-btn'><a class='nav-link btn btn-white btn-white-outline' href='Login.php'>LOGIN</a></li>";  } ?>
                     <?php if(!$_SESSION['Ingelogd']){  echo"<li class='nav-item nav-btn'><a class='nav-link btn btn-white btn-white-outline' href='register.php'>REGISTREREN</a></li>"; }?>
                     <?php if($_SESSION['Ingelogd'] == true){ echo"<li class='nav-item nav-btn'><a class='nav-link btn btn-white btn-white-outline' href='logout.php'>UITLOGGEN</a></li>"; } ?>
                    </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>
   
</section>
     
<!-- eind navigatie -->
<section class="engine"><a rel="external" href="https://mobirise.com">easy responsive web site building software</a></section><section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-after-navbar" data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="5000" id="slider3-h" style="background-color: rgb(239, 239, 239);">
    <div class=" container boxed-slider" style="padding-top: 160px; padding-bottom: 120px;">
        <div>
            <div>
                <ol class="carousel-indicators">
                    <li data-app-prevent-settings="" data-target="#slider3-h" data-slide-to="0" class="active"></li><li data-app-prevent-settings="" data-target="#slider3-h" class="" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider3-h" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="mbr-section mbr-section-hero carousel-item dark center active" data-bg-video-slide="false">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay" style="opacity: 0.6;"></div>
                            <div class="container-slide">
                                <img src="assets\images\foto_1.jpg">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-xs-center">
                                        <h2 class="mbr-section-title display-1">Mambo Fotografie</h2>
                                        <p class="mbr-section-lead lead"><i>"Als het klikt, maak ik de foto"</i></p>

                                        <div class="mbr-section-btn"><a class="btn btn-lg btn-warning" href="#Section-Gallerij">Gallerij</a> <a class="btn btn-lg btn-warning" href="Login.php">Login</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="mbr-section mbr-section-hero carousel-item dark center" data-bg-video-slide="false">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide">
                                <img src="assets\images\bridge55.jpg">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-1">
                                        <h2 class="mbr-section-title display-1"></h2>
                                        

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="mbr-section mbr-section-hero carousel-item dark center" data-bg-video-slide="false">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide">
                                <img src="assets/images/foto_3.jpg">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <h2 class="mbr-section-title display-1"></h2>
                                        <p class="mbr-section-lead lead"></p>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider3-h">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider3-h">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

    <!-- HIER HET STUKJE 'OVER'-->
    <section id="over">
        <div class="container-fluid text-md-center">
            
                
                    <h1 style="font-size: 60px"> Over </h1> <br />
                    <img src="visitekaartje%20blank%20org.jpg"><br /> <br />
                
                    <div class="col-md-6 col-md-offset-3">
                        <div class="" style="border: 6px solid #f3c649">
                    <p> 
                        <br />
                            <h3>Welkom op de website van Mambofotografie.nl</h3> <br />
                    KvK 59516933<br />
                    Op deze site staan diverse voorbeelden van mijn fotowerk. Of het nu gaat om trouwfoto's, portretten, strandfoto's of foto's van dieren, voor al uw fotowerk kunt u bij Mambofotografie.nl terecht (zowel zakelijk als privé).<br />

                    Bent u na het zien van de foto's enthousiast geraakt en wilt u meer weten over de mogelijkheden, maak dan snel een vrijblijvende afspraak. 
                    Via de knop "Contact" in het menu, kunt u op verschillende manieren met mij een afspraak maken.<br />

                    Op basis van uw wensen en mogelijkheden maak ik een interessante aanbieding voor u.<br />

                    Ik hoop spoedig met u kennis te mogen maken
                    Veel kijkplezier...<br />

                    Met vriendelijke groet,<br />
                    Mart Marbus
                    </p> 
                
                </div>
            </div>
        </div>
</section>
    <br />
    <!-- HIER EINDIGT HET STUKJE 'OVER'-->
    
<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery3-b" data-filter="true" style="background-color: rgb(243, 198, 73); padding-top: 6rem; padding-bottom: 3rem;">
    <!-- Filter -->
    <div class="mbr-gallery-filter container gallery-filter-active gallery-filter__bg">
        <ul>
            <li class="mbr-gallery-filter-all active">All</li>
        </ul>
    </div>


<!-- start section gallerij -->

    <!-- Gallery -->
    <div class="mbr-gallery-row">
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                    <!--<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p2" data-tags="Awesome" data-video-url="false">
                        <div href="#lb-gallery3-b" data-slide-to="0" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/bike-small.jpg">
                            
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p2" data-tags="Responsive" data-video-url="false">
                        <div href="#lb-gallery3-b" data-slide-to="1" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/code-man-small.jpg">
                            
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p2" data-tags="Creative" data-video-url="false">
                        <div href="#lb-gallery3-b" data-slide-to="2" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/coworkers-small.jpg">
                            
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>
                    </div>-->

                    <!--PORTRETTEN FOTO's-->
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p2" data-tags="Huwelijken" data-video-url="false">
                        <div href="#lb-gallery3-b" data-slide-to="4" data-toggle="modal">

<?php
                            $dir1 = "assets/images/Huwelijken/";
                            echo $dir1 ."<br>";
                            $exclude1 = array( ".","..","error_log","_notes" );
                            if (is_dir($dir1)) {
                            $files1 = scandir($dir1);


                            foreach($files1 as $file1){
                            if(!in_array($file1,$exclude1)){

                            echo "<div class='mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p2' data-tags='Portretten' data-video-url='false'>";
                                echo "<div href='#lb-gallery3-b' data-slide-to='6' data-toggle='modal'>";
                                    echo "<img alt='' src='" . $dir1 . $file1 . "' />";
                                    echo " <span class='icon-focus'></span>";
                                    echo "</div></div>";
                            }
                            }
                            }
                            ?>
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>
                    </div>
                            <?php

                            $dir = "assets/images/portretten/";
                            $exclude = array( ".","..","error_log","_notes" );
                            if (is_dir($dir)) {
                                $files = scandir($dir);
                                foreach($files as $file){
                                    if(!in_array($file,$exclude)){

                                       echo "<div class='mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p3' data-tags='Portretten' data-video-url='false'>";
                                       echo "<div href='#lb-gallery3-b' data-slide-to='6' data-toggle='modal'>";
                                        echo '<img src="' . $dir . $file . '" />';
                                        echo " <span class='icon-focus'></span>";
                                        echo "<span class='mbr-gallery-title'>Type caption here</span></div></div>";
                                    }
                                }
                            }
                            ?>
                        <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p2" data-tags="Natuur" data-video-url="false">
                        <div href="#lb-gallery3-b" data-slide-to="6" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/portretten/klein_img_4357-2.jpg">
                            
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>
                    </div><!--<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p2" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery3-b" data-slide-to="7" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/working-area-small.jpg">
                            
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-b">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery3-b" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-b" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-b" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-b" data-slide-to="3"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-b" data-slide-to="4"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-b" data-slide-to="5"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-b" data-slide-to="6"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-b" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner">
<!--                        <div class="carousel-item active">
                            <img alt="" src="assets/images/bike.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/code-man.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/coworkers.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/desktop.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/room-laptop.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/table.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/windows-books.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/working-area.jpg">
                        </div>-->
                        <?php

                        $dir = "assets/images/";
                        $exclude = array( ".","..","error_log","_notes" );
                        if (is_dir($dir)) {
                            $files = scandir($dir);

                            foreach($files as $file){
                                if(!in_array($file,$exclude)){
                                    $url = $dir.$file;


                                    echo "<div class='carousel-item'>";
                                    echo '<img src="' . $url . '" />
                                    
                                    </div>';

                                }
                            }
                        }
                        ?>

                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery3-b">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery3-b">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
    

    <br /> <br />
<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-2" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    <div class="container">
        <div class="row">
            <p class="text-xs-center">Copyright (c) 2016 Mambo Fotografie</p>
        </div>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/jquery-mb-ytplayer/jquery.mb.YTPlayer.min.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/mobirise-slider-video/script.js"></script>
  <script src="assets/mobirise-gallery/player.min.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>