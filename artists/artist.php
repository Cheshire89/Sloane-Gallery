<?php
$page = "artist";
require_once($_SERVER["DOCUMENT_ROOT"]."/SloaneGallery/php/includes/config.php");
include(ROOT_PATH.'php/includes/functionList.php');
include(ROOT_PATH.'php/ignoreList.php');
$artistWorks = selectParamQuery('select * from art_works where artist = ? ORDER BY availability, media');
$artistName = selectParamQuery('select * from artists where artist_id = ?');
$artist_id = getArtistId();

$title = $artistName[0]["artist_name"];
include(ROOT_PATH.'php/includes/header.php');

?>
<section class="body">
   <div class="bodyContainer">
    <div class="thumbHolder">
      <?php
      	foreach($artistWorks as $work){
          if(setArtWork($work) && !in_array($work["work_id"], $ignoreListArtWorks)){
  
                echo '<div class="thumbs">';
                //if(isset($work["img"])){
                  echo '<a href="work.php?artistId='.$artist_id.'&workId="> 
                  <img src="img/Thumb/'.$work["image"].'.jpg" alt='.$work["title"].'/></a>';
                //}
                  if(isset($work["title"])){ 
                    if($work["availability"] == "Available"){
                      echo '<p>'.trimTitle($work["title"],27).'</p>';
                    }else{
                      echo '<p>'.trimTitle($work["title"],22).' | <i class="fa fa-circle" aria-hidden="true"></i></p>';
                    }
                  
        }
                
              echo '</div>';

          }
      	}
      ?>


    </div>
   </div>

</section>

<?php
include(ROOT_PATH.'php/includes/footer.php');
?><script type="text/javascript">
  $(document).ready(function(){
    $('.thumbs a').each(function(i){
      $(this).attr('href',$(this).attr('href') + i++);
    });
  });
</script>
