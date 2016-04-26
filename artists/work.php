<?php
$page = "work";
$subPage = "work";
include('functionList.php');
include('displayLargePreview.php');

$urlArtistId = getArtistId();
$urlWorkId = getWorkId();
$artWorks = selectParamQuery('select * from art_works where artist = '.$urlArtistId);
$artistInfo = selectParamQuery('select * from artists where artist_id ='.$urlArtistId);
$artistName = $artistInfo[0]["artist_name"];
$title = $artistName;

require_once($_SERVER["DOCUMENT_ROOT"]."/SloaneGallery/php/includes/config.php");
include(ROOT_PATH.'php/includes/header.php');
?>
<section class="body">
   <div class="bodyContainer">
   		<?php
   			foreach ($artWorks as $artWork){
          displayLargePreviewContainer($artWork, $artistName, $urlArtistId);
   			}
   		?>
 
   </div>
</section>
<?php
include(ROOT_PATH.'php/includes/footer.php');
?>
<script type="text/javascript">
var query = location.search;
    query = query.split('&');
var artistId, workId, initialSlide = 0;
var numberPattern = /\d+/g;
artistId = query[0].match(numberPattern);
workId = query[1].match(numberPattern);
initialSlide = workId[0];
$(document).ready(function(){
$('.bodyContainer').slick({
  accessibility: true,
  dots:true,
  fade:true,
  initialSlide: initialSlide,
  infinite: false
});
});

</script>