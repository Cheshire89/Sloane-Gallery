<?php
$page = "work";
include('functionList.php');

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

   			echo	 '<div id="'.$artWork["work_id"].'" class="container ';

                if($artWork["work_id"] == $urlWorkId){
                  // if work id passed in url matches the id of the contaner add class selected
                  echo "selected "; 
                }

        echo       '">
						<div id="imageHolder">

					   		<div id="aLeft" class="imageBlock">
					   			<a class="prev arrow">
					   				<img src="img/arrow-left.png">
					   			</a>
					   		</div>

					   		<div id="img" class="imageBlock">
					   			<img src="img/L_placeholder.jpg" alt="Placeholder">		
					   		</div>

					   		<div id="aRight"class="imageBlock">
					   			<a class="next arrow">
					   				<img src="img/arrow-right.png">
					   			</a>	
					   		</div>

					   	</div>

					   	<div id="infoHolder">
			   		    <ul>';


   				echo '<li>Artist: '.$artistName.'</li>';
   				foreach ($artWork as $key => $value){
   					if($key != "work_id" && $key != "artist" && $value != ""){

   						if($key === "yearOfcreation"){
   							echo '<li> Year:  '.$value.'</li>';
   						} elseif ($key === "size"){	
   							echo '<li>'.ucfirst($key).':  '.$value .' in  &nbsp;('.valueToCm($value).')</li>';
   							
   						} else {
   							echo '<li>'.ucfirst($key).':  '.$value.'</li>';
   						}
   					}
   				}
   			echo	'</ul>';
        
        echo  '<ul>
                <li><a href="artist.php?artistId='.$urlArtistId.'">
                Return to '.$artistName.'\'s works</a></li>
              </ul>';
      
        echo  '</div>
          </div>';
   			}
   		?>
 
   </div>
</section>
<script type="text/javascript" src="../scripts/workPage.js"></script>
<?php
include(ROOT_PATH.'php/includes/footer.php');
?>