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

   			echo	 '<div id="'.$artWork["work_id"].'" class="';

                if($artWork["work_id"] == $urlWorkId){
                  // if work id passed in url matches the id of the contaner add class selected
                  echo "selected "; 
                }

        echo       'container">
						<div id="imageHolder">
					   		<div id="aLeft" class="imageBlock">
					   			<a class="prev">
					   				<img src="img/arrowL.png">
					   			</a>
					   		</div>
					   		<div id="img" class="imageBlock">
					   			<img src="img/L_placeholder.jpg" alt="Placeholder">		
					   		</div>
					   		<div id="aRight"class="imageBlock">
					   			<a class="next">
					   				<img src="img/arrowR.png">
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
   							echo '<li>'.ucfirst($key).':  '.$value .' in  &nbsp;&nbsp;('.valueToCm($value).')</li>';
   							
   						} else {
   							echo '<li>'.ucfirst($key).':  '.$value.'</li>';
   						}
   					}
   				}
   			echo	'</ul>
            </div>
          </div>';
   			}
   		?>
 
   </div>
</section>
<script type="text/javascript">

$(document).ready(function(){
	$('#img').focus();
});

var $first = $('.container:first'),
    $last = $('.container:last');

if($('.container').length === 1){
	$(".next").addClass("hidden");
  $(".prev").addClass("hidden");
  $("#img").css("margin-left","10%");
}

$(".next").on("click", function () {
 
    var $next,
        $selected = $(".selected");
    // get the selected item
    // If next  is empty , get the first
    $next = $selected.next('.container').length ? $selected.next('.container') :$first;
    $selected.removeClass("selected").fadeOut('slow');
    $next.addClass('selected').fadeIn('slow');
});

$(".prev").on("click", function () {
    var $prev,
        $selected = $(".selected");
    // get the selected item
    // If prev li is empty , get the last
    $prev = $selected.prev('.container').length ? $selected.prev('.container') : $last;
    $selected.removeClass("selected").fadeOut('slow');
    $prev.addClass('selected').fadeIn('slow');

});
</script>
<?php
include(ROOT_PATH.'php/includes/footer.php');
?>