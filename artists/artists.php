<?php
$page = "artists";
$title = "artists";
require_once($_SERVER["DOCUMENT_ROOT"]."/SloaneGallery/php/includes/config.php");
include(ROOT_PATH.'php/includes/header.php');
include(ROOT_PATH.'php/includes/functionList.php');
include(ROOT_PATH.'php/ignoreList.php');

$artists = selectQuery('select * from artists order by lastName');

?>
<section class="body">
   <div class="bodyContainer">
      <div class="imgContainer">
       <?php
               
        ?>
         <a>
            <img id="artistPreview" src="img/artistStart.jpg" name="targetimage">
         </a>
         <div class="caption">
            <p id="artistName">
                Alexander Anufriev
            </p>
         </div>
      </div>
      <div class="artistsList">
      <ul class="list">

	      <?php
          $i = 0;
      		foreach($artists as $artist){
            if(!in_array($artist["artist_id"], $ignoreListArtists)){
              echo '<li>
                      <a class="active" 
                         onMouseover="changeimage(myimages['.$i++.'],this)" 
                         href="artist.php?artistId='.$artist["artist_id"].'" 
                         id="target_'.$artist["artist_id"].'" 
                         rel="Page with '.$artist["artist_name"].'\'s works" hreflang="en">'.$artist["artist_name"].'</a>
                   </li>'; 
            }else{
              continue;
            }
      		}
            

	      ?>
          
      </ul>
      </div>
   </div>
</section>

<?php
include(ROOT_PATH.'php/includes/footer.php');
?>