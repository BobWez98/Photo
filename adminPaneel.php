<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 13-12-2016
 * Time: 09:21
 */
session_start();
?>
<html>

<head>
    <div class="modal-header">
        <div class="row">
            <div class="col-md-12">

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
                            <?php if(!ISSET($_SESSION['Ingelogd'])){ echo"<li class='nav-item nav-btn'><a class='nav-link btn btn-white btn-white-outline' href='Login.php'>LOGIN</a></li>";}  ?>
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
            </div>
        </div>
    </div>
    <!-- Site made with Mobirise Website Builder v3.9.2, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v3.9.2, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">
    <title>Admin</title>
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
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>



            <section id="Upload">

                <form class="form-group" action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-control">
                    Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>

                            <div class="form-control">
                        <label for="sel1">Selecteer onderwerp:</label>
                        <select class="form-control" name="dir" id="onderwerpen">
                            <option>portretten</option>
                            <option>huwelijken</option>
                            <option>natuur</option>

                        </select>
                    </div>
                    <div class="form-control">
                        <input type="submit" value="Upload Image" name="submit">
                    </div>
                </form>

            </section>


        </div>
    </div>
</div>

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

</body>

</html>
