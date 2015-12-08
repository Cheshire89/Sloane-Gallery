<?php
$page = "artist";
require_once($_SERVER["DOCUMENT_ROOT"]."/php/includes/config.php");
include(ROOT_PATH.'php/includes/header.php');
include('functionList.php');

$artist = loadArtistWorks('select * from art_works where artist = ?');
$artist_id = getId();

?>
<section class="body">
   <div class="bodyContainer">
    <div class="thumbHolder">
      <?php
      	foreach($artist as $work){
        		echo '<div class="thumbs">';
            //if(isset($work["img"])){
              echo '<a href="work.php?id='.$work["work_id"].'&artistId='.$artist_id.'"> 
              <img src="img/placeholder.jpg" alt="'.$work["title"].'"/></a>';
            //}
        		if(isset($work["title"])){
        			echo '<p>'.$work["title"].'</p>';
        		}
        		echo '</div>';
      	}
      ?>


    </div>
   </div>
</section>

<?php
include(ROOT_PATH.'php/includes/footer.php');
?>