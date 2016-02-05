<?php
$page = "work";
include('functionList.php');

$artistId = getArtistId();
$artWork = selectParamQuery('select * from art_works where artist = '.$artistId);
$artistInfo = selectParamQuery('select * from artists where artist_id ='.$artistId);
$artistName = $artistInfo[0]["artist_name"];
$title = $artistName;
$artwork = $_GET["workId"];

function valueToCm($value){
	$newValue = '';
	$value = explode('x', $value);

	for($i=0; $i<count($value);$i++){
		$value[$i] = floatval(number_format(($value[$i] * 2.54),1));
		$newValue .= $value[$i].' ';
	}

	return $newValue = str_replace(' ',' x ', trim($newValue)).' cm';
}

require_once($_SERVER["DOCUMENT_ROOT"]."/SloaneGallery/php/includes/config.php");
include(ROOT_PATH.'php/includes/header.php');
?>
<section class="body">
   <div class="bodyContainer">
   		<?php
   				
   			foreach ($artWork as $work){
   			echo	 '<div class="container">

					   	<div id="imageHolder">
					   		<div id="aLeft" class="imageBlock">
					   			<img src="img/arrowL.png">
					   		</div>
					   		<div id="img" class="imageBlock">
					   			<img src="img/L_placeholder.jpg" alt="Placeholder">		
					   		</div>
					   		<div id="aRight"class="imageBlock">
					   			<img src="img/arrowR.png">
					   		</div>
					   	</div>
					   	<div id="infoHolder">
			   		<ul>';


   				echo '<li>Artist: '.$artistName.'</li>';
   				foreach ($work as $key => $value){
   					if($key != "work_id" && $key != "artist" && $value != ""){

   						if($key === "yearOfcreation"){
   							echo '<li> Year:  '.$value.'</li>';
   						} elseif ($key === "size"){	
   							echo '<li>'.ucfirst($key).':  '.$value .' in  &nbsp;&nbsp;('.valueToCm($value).')</li>';
   							
   						} else {
   							echo '<li>'.ucfirst($key).':  '.$value.'</li>';
   						}
   					}
   				}
   			echo	'</ul></div></div>';
   			}
   		?>
 
   </div>
</section>
<?php
include(ROOT_PATH.'php/includes/footer.php');
?>