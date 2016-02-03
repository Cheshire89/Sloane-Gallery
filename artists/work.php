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
   		<div id="aLeft" class="imageBlock"></div>
   		<div id="img" class="imageBlock"></div>
   		<div id="aRight"class="imageBlock"></div>
   	</div>
   	<div id="infoHolder">
   		
   	</div>

   </div>
</section>
<?php
include(ROOT_PATH.'php/includes/footer.php');
?>