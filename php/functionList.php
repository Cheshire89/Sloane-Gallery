<?php 
include('connect.php');

function valueToCm($value){
	$newValue = '';
	$value = explode('x', $value);

	for($i=0; $i<count($value);$i++){
		$value[$i] = floatval(number_format(($value[$i] * 2.54),1));
		$newValue .= $value[$i].' ';
	}

	return $newValue = str_replace(' ',' x ', trim($newValue)).' cm';
}

function wrapLastNameSpan($value){
	$newValue = '';
	$value = explode(' ', $value);
	for($i=0; $i<count($value);$i++){
		if($i==0){
			$newValue.=$value[$i].' ';
		}else{
			$newValue.='<span>'.$value[$i].'</span>';
		}
	}
	return $newValue;
}

function trimTitle($string, $num){ 
  if(strlen(trim($string)) > $num){
    return substr($string, 0, $num-3).'..."';
  } else {
    return $string.str_repeat(' ', $num-strlen($string));
}
}

function printAuthor($element){
	if(isset($element["author"])){
		return $element["author"].', ';
	}
}

function checkPrint($collection){
    $inarray = false;

    foreach($collection as $element){
        if(in_array('Print', $element)){
            $inarray = true;
            break;
        } 
    }
    return $inarray;
}

function setArtWork($element){
  $setArtWork = false;
  if(imageIsSet($element) && ($element["availability"] == 'Available' || $element["exception"] == true)){
    $setArtWork = true;
  }else{
    $setArtWork = false;
  }
  return $setArtWork;
}

function imageIsSet($element){
	$image = $element["image"];
	if($image === null || $image === ""){
		return false;
	}else{
		return true;
	}
}

function getWorkId(){
	if(!empty($_GET['workId'])){
		$id = intval($_GET['workId']);
		return $id;
	}else {
		return "<h2>Our Appologies Work Id Could Not be Found </h2><br/>";
	}
}

function getArtistId(){
	if(!empty($_GET['artistId'])){
		$artist_id = intval($_GET['artistId']);
		return $artist_id;
	}else{
		return "<h2>Our Appologies Artist with Give Id Could not be Found. </h2><br/>";
	}
}

function getArtistName(){
	if(!empty($_GET['artist'])){
		$artist = $_GET['artist'];
		return $artist;
	}else{
		return "<h2>Artist Selected is not in the List</h2>";
	}
}
?>