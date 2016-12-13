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
                      <?php if(!ISSET($_SESSION['Ingelogd'])){ echo"<li class='nav-item nav-btn'><a class='nav-link btn btn-white btn-white-outline' href='Login.php'>LOGIN</a></li>";  } ?>
                     <?php if(ISSET($_SESSION['Ingelogd'])){ echo"<li class='nav-item nav-btn'><a class='nav-link btn btn-white btn-white-outline' href='logout.php'>UITLOGGEN</a></li>"; } ?>
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

<section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-after-navbar" data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="5000" id="slider3-h" style="background-color: rgb(239, 239, 239);">
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
    <!-- HIER START DE GALLERIJ --> 
    
    <div class="gallery">
    
        <div class="container">

        <div class="row">
            
        <?php 

            $dir = "assets/images/\"$keuze\"";
            $exclude1 = array( ".","..","error_log","_notes" );
            if (is_dir($dir)){ 
            $images = scandir($dir);
                foreach $images as $image {
                    // ben hier bezig maar moet nu even stoppen
                }
                
            }
            
            <div class="col-lg-12">
                <h1 class="page-header">Thumbnail Gallery</h1>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </div>
        
            ?>
        </div>
    </div>
     <!-- EINDE GALLERIJ --> 
     <!-- TARIEVEN -->
    <section id="tarieven">
           <div class="jumbotron">
            <div class="container">
                <h1 style="font-size: 60px"> TARIEVEN </h1> <br />
                <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#Trouwreportages" aria-controls="home" role="tab" data-toggle="tab">Trouwreportages</a></li>
                        <li role="presentation"><a href="#Portretfotografie" aria-controls="profile" role="tab" data-toggle="tab">Portretfotografie</a></li>
                        <li role="presentation"><a href="#Familie" aria-controls="messages" role="tab" data-toggle="tab">Familie & gezin</a></li>
                        <li role="presentation"><a href="#Zwanger" aria-controls="messages" role="tab" data-toggle="tab">Zwangerschapsshoots</a></li>
                        <li role="presentation"><a href="#Bedrijfsportretten" aria-controls="settings" role="tab" data-toggle="tab">Bedrijfsportretten</a></li>
                        <li role="presentation"><a href="#Let_op" aria-controls="settings" role="tab" data-toggle="tab">Let op!</a></li>
                    </ul>

            
            <br /> <br />
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane" id="Trouwreportages">
                                    <h3>Trouwreportages</h3>
                                    <p>Informeer vrijblijvend naar onze voordelige tarieven voor het
                                    maken van een trouwreportage.<br /> Wij geven jullie graag advies over de
                                    diverse mogelijkheden.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="Portretfotografie">
                                    <h3>Portretfotografie</h3>
                                    <p>In de studio of op locatie 1-5 personen: <br />
                                    Met 1-5 personen € 75,- ca 1 uur fotografie,
                                    minimaal 5 nabewerkte foto’s (groeps- en singlefoto’s) in hoge
                                    resolutie.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="Familie">
                                    <h3>Familie en Gezin</h3>
                                    Ouders, kinderen en opa & oma € 85,- ca 1 uur fotografie,
                                    minimaal 5 nabewerkte foto’s (groeps- en singlefoto’s) in hoge resolutie.
                                </div>
                                <div role="tabpanel" class="tab-pane" id="Zwanger">
                                    <h3>Zwangerschapsshoots</h3>
                                    <p>€ 85,- per uur het aantal foto's is afhankelijk van de duur van de shoot,
                                        met een minimum van 5 nabewerkte foto's in hoge resolutie.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="Bedrijfsportretten">
                                    <h3>Bedrijfsportretten</h3>
                                    <p>Bedrijfsportretten op locatie vanaf € 75,-.
                                        Een portret van al uw medewerkers (bijv. voor in uw brochure of op uw website)
                                        tot 10 medewerkers voor € 225,-. <br />

                                        - De foto's worden geleverd in hoge resolutie op usb-stick</p>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="Let_op">
                                    <h3>Let op!</h3>
                                    <p>Alle genoemde bedragen zijn exclusief 21% BTW.

                                        Afdrukken van foto’s De foto’s kunnen, tegen meerprijs en in verschillende formaten, via de website van Mambofotografie worden besteld.<br />
                                        Als je geen afdruk(ken) wilt, kun je voor de download-optie kiezen of voor een usb-stick tegen meerprijs. <br />

                                        - Alle prijzen genoemd bij de bestel/afdruk service zijn inclusief 21% BTW. <br />

                                        - Reiskosten buiten een straal van 25 km van Den Helder bedragen € 0,39/km. <br />

                                        - Opdrachten dienen vooraf per overschrijving a 50% te worden voldaan. <br />



                                        Voor alle opdrachten zijn de Algemene Voorwaarden van Mambofotografie.nl van toepassing.</p>
                                </div>
                            </div>

                        </div>
                    </div>
        </div>
        </section>
<!-- EINDE TARIEVEN -->
    


    <br /> <br />
<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-2" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    <div class="container">
        <div class="row">
            <p class="text-xs-center">Copyright (c) 2016 BMMMT design</p>
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