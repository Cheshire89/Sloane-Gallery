<?php
$page = "work";
require_once($_SERVER["DOCUMENT_ROOT"]."/php/includes/config.php");
include('functionList.php');

$artist = loadArtistWorks('select * from art_works where artist = ?');

include(ROOT_PATH.'php/includes/header.php');
?>
<section class="body">
   <div class="bodyContainer">
    <div class="workContainer">
        <div class="workAlign" id="arrowL">
        </div>
        <div class="workAlign" id="work">
        </div>
        <div class="workAlign" id="arrowR">
        </div>
    </div>
   </div>
</section>
<?php
include(ROOT_PATH.'php/includes/footer.php');
?>