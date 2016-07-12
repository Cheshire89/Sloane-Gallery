<?php
$page = "artist";
require_once($_SERVER["DOCUMENT_ROOT"]."/php/includes/config.php");
require_once(ROOT_PATH.'php/functionList.php');
include(ROOT_PATH.'php/ignoreList.php');

$artistFullName = getArtistName();

  if(strpos($artistFullName, '_')>0){
    $artistLastName = substr($artistFullName, strpos($artistFullName,'_')+1);
  } else {
    $artistLastName = $artistFullName;
  }

$artistInfo = selectQuery('select * from artists where lastName="'.$artistLastName.'"');
$artist_id = $artistInfo[0]["artist_id"];


$title = $artistInfo[0]["artist_name"];
$description = "Overview of art works by ". $title . " available at the Sloane Gallery of Art, Denver CO";
$keywords = $title;


 if(in_array($artist_id, $ukranians)){
  $artistWorks = selectQuery('select * from art_works where '.printUkranians($ukranians).' ORDER BY availability, media');
}elseif(in_array($artist_id, $change_order)){
  $artistWorks = selectQuery('select * from art_works where artist = '.$artist_id.' ORDER BY availability desc, category, media desc');
}else{
  $artistWorks = selectQuery('select * from art_works where artist = '.$artist_id.' ORDER BY availability, media');
}

$thumbsHTML = "";

foreach($artistWorks as $work){
      if(setArtWork($work) && !in_array($work["work_id"], $ignoreListArtWorks)){

            $thumbsHTML .= '<div class="thumbs" itemscope itemtype="http://schema.org/Painting">';
            
            $thumbsHTML .= '<a href="work/'.$artist_id.'/"> 
            <img src="img/Thumb/'.$work["image"].'.jpg" alt='.$work["title"].'/></a>';
            
            
            if(isset($work["title"])){ 
              if($work["availability"] == "Available"){
                $thumbsHTML .= '<p itemprop="name">'.trimTitle($work["title"],23).'</p>';
              }else{
                $thumbsHTML .= '<p itemprop="name">'.trimTitle($work["title"],20).' | <i class="fa fa-circle" aria-hidden="true"></i></p>';
              }
              
      }                
    $thumbsHTML .= '</div>';
  }
}


include(ROOT_PATH.'php/includes/header.php');
?>
<section class="body">
   <div class="bodyContainer">
   <div class="nameHolder">
    <?php
      if(in_array($artist_id, $ukranians)){
        echo '<h1>Ukranian Artists</h1>';
      }else{
        echo '<h1 itemprop="creator">'.$title.'</h1>';
      }
    ?>
   </div>
    <div class="thumbHolder">
      <?php
      	 echo $thumbsHTML;
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
