<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 13-12-2016
 * Time: 09:21
 */
session_start();
include("./includes/header.php");
?>



<body>

            <br>
            <br>
            <br>
            <br>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-10"

                <form class="form-group" action="upload.php" method="post">
                    <div class="col-md-6">
                    <div class="form-control">
                        <label class="form-control-label">Uploaden van afbeeldingen:</label>
                        <label class="form-control-label" for="fileToUpload">Selecteer een foto:</label>
                        <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    </div>

                            <div class="form-control">
                        <label class="form-control-label" for="onderwerpen">Selecteer onderwerp:</label>
                        <select class="form-control" name="dir" id="onderwerpen">
                            <option>portretten</option>
                            <option>huwelijken</option>
                            <option>natuur</option>

                        </select>
                    </div>
                    <div class="form-control">
                        <input class="btn btn-success form-control" type="submit" value="Upload Image" name="submit">
                    </div>
                </form>







            <form class="form-horizontal" method="POST" action="adminPaneel.php">
                <div class="form-control">
                    <h1 class="form-control">Verwijderen van:</h1>
                </div>
                <div class="form-control">
                    <label for="sel2" class="form-control">
                    Selecteer map:
                    </label>
                    <select class="form-control" name="dir" id="dir">
                        <option>portretten</option>
                        <option>huwelijken</option>
                        <option>natuur</option>
                    </select>

                </div>
                <div class="form-control">
                    <input type="submit" value="Inhoud weergeven" name="submit">
                </div>
                <?php

                if(ISSET($_POST['dir'])){
                    $dir = $_POST['dir'];

                    $dirList = scandir("assets/images/".$dir);
                    echo"<ul>";
                    foreach ($dirList as $item){
                        echo"<li>". $item ."</li>";
                    }
                    echo"</ul>";
                }

                ?>

            </form>

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
