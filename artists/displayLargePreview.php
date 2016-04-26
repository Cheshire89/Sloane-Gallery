<?php
function displayLargePreviewContainer($element, $name, $artistUrl){
  if(imageSet($element)){
        echo   '<div class="container">';
            // if($artWork["work_id"] == $urlWorkId){
            //   // if work id passed in url matches the id of the contaner add class selected
            //   echo "selected "; 
            // }
         displayLargeImage($element);
           echo '<div id="infoHolder">';
           displayWorkInfo($element, $name);
           displayReturnLink($artistUrl, $name);
           echo '</div>'; 
        echo  '</div>';
    }
}

function displayLargeImage($element){
 echo '
    <div id="imageHolder">
        <div id="img" class="imageBlock">
          <img src="img/Lg/'.$element["lImage"].'.jpg">   
        </div>
   </div>';
}

function displayWorkInfo($element, $name){

   echo'<ul>';
   echo '<li>Artist: '.$name.'</li>';
        
        foreach ($element as $key => $value){
          if($key != "work_id" && $key != "artist" && $value != ""){

            if($key === "yearOfcreation"){
              echo '<li> Year:  '.$value.'</li>';
            } elseif ($key === "size"){ 
              echo '<li>'.ucfirst($key).':  '.$value .' in  &nbsp;('.valueToCm($value).')</li>';
            }elseif($key === "lImage"){
              continue;
            }else {
              echo '<li>'.ucfirst($key).':  '.$value.'</li>';
            }
          }
        }

      echo  '</ul>';
}

function displayReturnLink($urlArtistId, $name){
   echo  '<ul>
              <li><a href="artist.php?artistId='.$urlArtistId.'">
              Return to '.$name.'\'s works</a></li>
          </ul>';
}
?>