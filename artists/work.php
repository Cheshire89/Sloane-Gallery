<?php
$page = "work";
$subPage = "work";
require_once($_SERVER["DOCUMENT_ROOT"]."/php/includes/config.php");
require_once(ROOT_PATH.'php/functionList.php');
include(ROOT_PATH.'php/displayLargePreview.php');
include(ROOT_PATH.'php/ignoreList.php');

$urlArtistId = getArtistId();
$urlWorkId = getWorkId();     


if(in_array($urlArtistId, $ukranians)){
    $artWorks = selectQuery('select * from art_works where '.printUkranians($ukranians).' ORDER BY availability, media');
}elseif(in_array($urlArtistId, $change_order)){
    $artWorks = selectParamQuery('select * from art_works where `artist`='.$urlArtistId.'  ORDER BY availability desc, category, media desc');
}else{
    $artWorks = selectParamQuery('select * from `art_works` where `artist`='.$urlArtistId.' ORDER BY availability, media');
}

$artistN = selectParamQuery('select artist_name from artists where artist_id ='.$urlArtistId);
$artistFullName = $artistN[0]["artist_name"];
$title = $artistFullName.", ";
$keywords =  $artistFullName." ,";

$description = "Detailed view of art works by ". $title . " available at the Sloane Gallery of Art, Denver CO";

$mainContentHTML = "";
foreach ($artWorks as $artWork){
  $artistN = selectParamQuery('select artist_name from artists where artist_id ='.$artWork["artist"]);
  $keywords .= str_replace('"', '', $artWork["title"])." , ";
  if(setArtWork($artWork) && !in_array($artWork["work_id"], $ignoreListArtWorks)){
    $mainContentHTML .= largePreviewContainer($artWork, $artistFullName, $urlArtistId);
  } 
}
include(ROOT_PATH.'php/includes/header.php');

?>
<section class="body">
   <div class="bodyContainer">
   		<?php
        echo $mainContentHTML;
   		?>
   </div>
</section>
<?php
include(ROOT_PATH.'php/includes/footer.php');
?>

