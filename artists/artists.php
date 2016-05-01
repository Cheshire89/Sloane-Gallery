<?php
$page = "artists";
$title = "artists";
require_once($_SERVER["DOCUMENT_ROOT"]."/SloaneGallery/php/includes/config.php");
include(ROOT_PATH.'php/includes/header.php');
include('functionList.php');

$artists = selectQuery('select * from artists order by lastName');

function lastNameSort($a, $b) {
    $aLast = end(explode(' ', $a));
    $bLast = end(explode(' ', $b));

    return strcasecmp($aLast, $bLast);
}

$ignoreList = [1,9,26,36,43,53];
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
                Mihail Alexandrov
            </p>
         </div>
      </div>
      <div class="artistsList">
      <ul class="list">

	      <?php
      		foreach($artists as $artist){
          if(!in_array($artist["artist_id"], $ignoreList)){
            echo '<li>
                    <a class="active" 
                       onMouseover="changeimage(myimages['.$artist["artist_id"].'],this)" 
                       href="artist.php?artistId='.$artist["artist_id"].'" 
                       id="target_'.$artist["artist_id"].'" 
                       rel="Page with '.$artist["artist_name"].'\'s works" hreflang="en">'.$artist["artist_name"].'</a>
                 </li>'; 
          }else{
            echo '<li><a disabled="true" class="inactive" onMouseover="changeimage(myimages['.$artist["artist_id"].'],this)" 
            id="target_'.$artist["artist_id"].'">'.$artist["artist_name"].'</a></li>';
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