<?php
$page = "artists";
$title = "artists";
require_once($_SERVER["DOCUMENT_ROOT"]."/php/includes/config.php");
require_once(ROOT_PATH.'php/functionList.php');
include(ROOT_PATH.'php/ignoreList.php');
$description = "Artists: Anufriev, Boulatov, Genia Chef, Komar & Melamid, Kabakov, Kalinin, Klionsky, Kosolapov, Tengiz, Yelchin, Zverev ";

$artists = selectQuery('select * from artists order by lastName');


$i = 0;
$keywords = "";
$artistListHTML = "";

foreach($artists as $artist){
  if($artist["firstName"] === $artist["lastName"]){
  $linkToArtist = $artist["lastName"];
  }else{
    $linkToArtist = $artist["firstName"].'_'.$artist["lastName"];
  }
  
  if(!in_array($artist["artist_id"], $ignoreListArtists)){
    $artistListHTML .= '<li>
                          <a class="active" 
                             onMouseover="changeimage(myimages['.$i++.'],this)" 
                             href="/artists/'.$linkToArtist.'" 
                             id="target_'.$artist["artist_id"].'" 
                             rel="Page with '.$artist["artist_name"].'\'s works" hreflang="en" itemprop="name">'.$artist["artist_name"].'</a>
                       </li>';
    $keywords .= $artist["artist_name"].", "; 
  }else{
    continue;
  }
}

include(ROOT_PATH.'php/includes/header.php');
?>
<section class="body">
   <div class="bodyContainer">
      <div class="imgContainer">
         <a>
            <img id="artistPreview" src="img/artistStart.jpg" name="targetimage">
         </a>
         <div class="caption">
            <p id="artistName">
                Alexander <span>Anufriev</span>
            </p>
         </div>
      </div>
      <div class="artistsList">
      <ul class="list" itemscope="" itemtype="http://schema.org/Person">
	      <?php
          echo $artistListHTML;
	      ?>
          
      </ul>
      </div>
   </div>
</section>

<?php
include(ROOT_PATH.'php/includes/footer.php');
?>