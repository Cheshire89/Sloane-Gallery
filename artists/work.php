<?php
$page = "work";
require_once($_SERVER["DOCUMENT_ROOT"]."/php/includes/config.php");
include('functionList.php');

$artWork = selectParamQuery('select * from art_works where work_id = ?');
$artist = getArtistId();
$artistName = selectParamQuery('select * from artists where artist_id ='.$artist);
$title = $artistName[0]['artist_name'];

include(ROOT_PATH.'php/includes/header.php');
?>
<section class="body">
   <div class="bodyContainer">

   </div>
</section>
<?php
include(ROOT_PATH.'php/includes/footer.php');
?>