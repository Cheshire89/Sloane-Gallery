<?php
$page = "artists";
require_once($_SERVER["DOCUMENT_ROOT"]."/php/includes/config.php");
include(ROOT_PATH.'php/includes/header.php');
include('functionList.php');

$artists = loadListOfArtists('select * from artists order by artist_id');

?>
<section class="body">
   <div class="bodyContainer">
      <div class="imgContainer">
       <?php
               
        ?>
         <a href="<?php echo $link; ?>">
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
            href="artist.php?id='.$artist["artist_id"].'" id="target_'.$artist["artist_id"].'">'.$artist["artist_name"].'</a></li>'; 
      		}
	      ?>
      </ul>
      </div>
   </div>
</section>

<?php
include(ROOT_PATH.'php/includes/footer.php');
?>