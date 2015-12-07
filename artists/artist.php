<?php
$page = "artist";
require_once($_SERVER["DOCUMENT_ROOT"]."/php/includes/config.php");
include('functionList.php');

$artist = loadArtistWorks('select * from art_works where artist = ?');

include(ROOT_PATH.'php/includes/header.php');
?>
<section class="body">
   <div class="bodyContainer">
    <div class="thumbHolder">
      <?php
      	foreach($artist as $work){
        		echo '<div class="thumbs">';
            //if(isset($work["img"])){
              echo '<a href="work.php?id='.$work["work_id"].'"> 
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