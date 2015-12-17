<?php
$page = "work";
require_once($_SERVER["DOCUMENT_ROOT"]."/php/includes/config.php");
include('functionList.php');

$work = loadArtistWorks('select * from art_works where work_id = ?');
$artist = getArtistId();

include(ROOT_PATH.'php/includes/header.php');
?>
<section class="body">
   <div class="bodyContainer">
   
   
   </div>
</section>
<?php
include(ROOT_PATH.'php/includes/footer.php');
?>