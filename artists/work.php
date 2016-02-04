<?php
$page = "work";
include('functionList.php');

$artWork = selectParamQuery('select * from art_works where work_id = ?');
$artist = getArtistId();
$artistName = selectParamQuery('select * from artists where artist_id ='.$artist);
$title = $artistName[0]['artist_name'];

require_once($_SERVER["DOCUMENT_ROOT"]."/SloaneGallery/php/includes/config.php");
include(ROOT_PATH.'php/includes/header.php');
?>
<section class="body">
   <div class="bodyContainer">
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
   		<ul>
   			<li><strong>Title:</strong>Thing One</li>
   			<li><strong>Title:</strong>Thing Two</li>
   			<li><strong>Title:</strong>Thing Three Longer String Test</li>
   			<li><strong>Title:</strong>Thing Four</li>
   			<li><strong>Title:</strong>Thing Five</li>
   		</ul>
   		
   	</div>

   </div>
</section>
<?php
include(ROOT_PATH.'php/includes/footer.php');
?>