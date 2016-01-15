<?php
$page = "artists";
$title = "artists";
require_once($_SERVER["DOCUMENT_ROOT"]."/SloaneGallery/php/includes/config.php");
include(ROOT_PATH.'php/includes/header.php');
include('functionList.php');

$artists = selectQuery('select * from artists order by artist_id');

?>
<section class="body">
   <div class="bodyContainer">
      <div class="imgContainer">
       <?php
               
        ?>
         <a>
            <img src="img/artistStart.jpg" name="targetimage">
         </a>
         <div class="caption">
            <p>
               <?php
              
               ?>
            </p>
         </div>
      </div>
      <div class="artistsList">
      <ul class="list">
	      <?php 
      		foreach($artists as $artist){
      		echo '<li><a onMouseover="changeimage(myimages['.$artist["artist_id"].'],this.href)" 
            href="artist.php?artistId='.$artist["artist_id"].'" id="target_'.$artist["artist_id"].'">'.$artist["artist_name"].'</a></li>'; 
      		}
	      ?>
      </ul>
      </div>
   </div>
</section>

<?php
include(ROOT_PATH.'php/includes/footer.php');
?>