<?php
$page = "artist";
include('functionList.php');
$artistWorks = selectParamQuery('select * from art_works where artist = ?');
$artistName = selectParamQuery('select * from artists where artist_id = ?');
$artist_id = getArtistId();

require_once($_SERVER["DOCUMENT_ROOT"]."/SloaneGallery/php/includes/config.php");
$title = $artistName[0]["artist_name"];
include(ROOT_PATH.'php/includes/header.php');

?>
<section class="body">
   <div class="bodyContainer">
    <div class="thumbHolder">
      <?php
      	foreach($artistWorks as $work){
          if(imageSet($work)){
              echo '<div class="thumbs">';
              //if(isset($work["img"])){
                echo '<a href="work.php?artistId='.$artist_id.'&workId="> 
                <img src="img/Thumb/'.$work["lImage"].'.jpg" alt='.$work["title"].'/></a>';
              //}
                if(isset($work["title"])){
                  echo '<p>'.trimTitle($work["title"]).'</p>';
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
?>
<script type="text/javascript">
  $(document).ready(function(){
    $('.thumbs a').each(function(i){
      $(this).attr('href',$(this).attr('href') + i++);
    });
  });
</script>