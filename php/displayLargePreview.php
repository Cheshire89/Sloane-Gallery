<?php
require_once(ROOT_PATH.'php/functionList.php');


function largePreviewContainer($element, $name, $artistUrl){
  $largePreviewHTML = "";
  if(imageIsSet($element)){
       $largePreviewHTML .=  '<div class="container" itemscope itemtype="http://schema.org/Painting">';
            // if($artWork["work_id"] == $urlWorkId){
            //   // if work id passed in url matches the id of the contaner add class selected
            //   echo "selected "; 
            // }
       $largePreviewHTML .= largeImage($element, $name);
       $largePreviewHTML .='<div id="infoHolder">';
       $largePreviewHTML .= workInfo($element, $name);
       $largePreviewHTML .= returnLink($artistUrl, $name);
       $largePreviewHTML .= '</div></div>'; 
    }

    return $largePreviewHTML;
}

function largeImage($element, $name){
  $imageHolderHTML = '<div id="imageHolder">
                          <div id="img" class="imageBlock">
                            <img itemprop="image" src="'.BASE_URL.'artists/img/Lg/'.$element["image"].'.jpg" alt="'. $name.' '.str_replace('"', '', $element["title"]).'">   
                          </div>
                     </div>';

  return $imageHolderHTML;                
}

function workInfo($element, $name){
  $workInfoHTML = "";
  $availableLink = '<a href="'.BASE_URL.'contact/'.$element["work_id"].'">Contact Gallery for Price | 
                    <span class="fa fa-envelope" aria-hidden="true"></span></a>';

   $workInfoHTML .= '<ul>';
   $workInfoHTML .= '<li>Artist: <span itemprop="creator">'.$name.'</span></li>';
        
        foreach ($element as $key => $value){
          if($key != "work_id" && $key != "artist" && $value != "" && $key != "exception"){
              if($key === "title"){
                $workInfoHTML .= '<li class="title">'.ucfirst($key).':  <span itemprop="name">'.ucwords($value).'</span></li>';
              }elseif($key === "media"){
                $workInfoHTML .='<li>'.ucfirst($key).':  <span itemprop="artMedium">'.ucwords($value).'</span></li>';
              }elseif($key === "year"){
                $workInfoHTML .= '<li>'.ucfirst($key).':  <span itemprop="dateCreated">'.ucwords($value).'</span></li>';
              }elseif($key === "size"){ 
                $workInfoHTML .= '<li>'.ucfirst($key).':  '.$value .' in  &nbsp;('.valueToCm($value).')</li>';
              }elseif($key === "availability" && $value === "Available") {
                $workInfoHTML .= '<li>'.$availableLink .' </li>';
              }elseif($key === "image" || $key === "category"){
                continue;
              }else{
                $workInfoHTML .= '<li>'.ucfirst($key).':  '.ucwords($value).'</li>';
              }
          } 
        }

      $workInfoHTML .=  '</ul>';

    return $workInfoHTML;
}

function returnLink($urlArtistId, $name){

  if($name === 'Tengiz (Tengiz Mirzashvili)'){
    $returnLink = 'Tengiz_Mirzashvili';
  }elseif ($name === 'Komar & Melamid') {
    $returnLink = 'Komar_Melamid';
  }else{
    $returnLink = str_replace(' ', '_', $name);
  }

  $returnLinkHTML = '<ul>
              <li><a href="/artists/'.$returnLink.'">
              <span class="fa fa-rotate-left" aria-hidden="true"></span> Back to '.$name.'\'s works</a></li>
          </ul>';
    return $returnLinkHTML;
}
?>