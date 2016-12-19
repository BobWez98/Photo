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
<div class="container-fluid">
  <div class="row" style="padding-top:90px;">
      <div class="col-md-6 col-md-offset-3">
      <!--verwijderen foto vanaf hier-->

      <form class="form-group" method="POST" action="adminPaneel.php">
          <h1>Verwijder een foto!</h1>
          <div class="well">
              <label for="onderwerpen">Selecteer</label>
              <select class="form-control" name="dir" id="onderwerpen">
                  <option>portretten</option>
                  <option>huwelijken</option>
                  <option>natuur</option>
              </select>
              <input class="form-control" type="submit" value="Inhoud map">
      </form>


    <form class="form-group" method="POST" action="fotoVerwijderen.php">

        <ul class="list-group">
            <?php

            if(ISSET($_POST['dir'])){
                $_SESSION['dir'] = $_POST['dir'];
                $dir1 = "assets/images/".$_SESSION['dir']."/";
                $dir = scandir("assets/images/".$_POST['dir']);
                echo "<div class='form-control' style='overflow: scroll; height: 500px;'>";
                foreach (array_slice($dir, 2) as $item){

                    echo "
                         <li class='list-group-item list-group-item-action' onmouseover=\"showPhoto('".$dir1.$item."')\" onmouseout=\"hidePhoto('".$dir1.$item."')\">
                         
                         <input class='form-group' name='verwijderen' value='$item' type='checkbox'>
                         ".$dir1.$item."
                        
                          <div id='".$dir1.$item."' style='display:none'>
                         <img style='width:25%;' class='img-responsive' src='".$dir1.$item."'></div>
                        </li>
                         
                         
                         ";

                }




            }


            ?>

        </ul>
        <input class='form-control' type='submit' value='Verwijder Foto'>
  </div>
    </form>






      <!--uploaden foto vanaf hier -->

     <form class="form-group" method="POST" action="upload.php" enctype="multipart/form-data">

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

     </form>

<!--Map/album toevoegen-->

      <form class="form-group" method="POST" action="mapMaken.php">
          <h1>Maak een nieuw album!</h1>
           <div class="well">
               <div class="form-group">
                   <label for="album">Type hier de naam van het nieuwe album:</label>
                   <input class="form-control" type="text" name="album">
                   <input class="form-control" type="submit" value="Maak album" name="submit">

               </div>
           </div>


      </form>



</div>
</div>
<script>

    function showPhoto(item){
        var e = document.getElementById(item);
        e.style.display = 'block';

    }

    function hidePhoto(item){
        var e = document.getElementById(item);
        e.style.display = 'none';

    }




</script>


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
