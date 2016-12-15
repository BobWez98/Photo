<?php
/**
 * Created by PhpStorm.
 * User: BobFagit
 * Date: 13-12-2016
 * Time: 09:21
 */
session_start();
include("./includes/header.php");
?>



<body>
<div class="container">
  <div class="row" style="padding-top:90px;">
     <form class="form-group" method="POST" action="upload.php">
        <div class="col-md-6 col-md-offset-3">
            <h1>Upload een foto!</h1>
         <div class="well">
            <div class="form-group" style="position: static;">
                <label for="onderwerpen">Selecteer</label>
                <select class="form-control" name="dir" id="onderwerpen">
                    <option>portretten</option>
                    <option>huwelijken</option>
                    <option>natuur</option>
                </select>
                <p class="help-block">Selecteer hier de categorie waar de foto bij hoort.</p>
            </div>

            <div class="form-group" style="position: static;">
                <label class="form-control-label" for="fileToUpload">Selecteer een foto:</label>
                <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                <p class="help-block">Selecteer hier de foto die u wilt uploaden.</p>
            </div>
            <div class="form-group" style="padding-right: 20px; position: static;">

                <input class="form-control" type="submit" value="Upload Image" name="submit">
            </div>
        </div>
    </div>
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
