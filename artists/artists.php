<?php
$page = "artists";
require_once($_SERVER["DOCUMENT_ROOT"]."/php/includes/config.php");
include(ROOT_PATH.'php/includes/header.php');
include('connect.php');

try{
	$results = $db -> query('select * from artists order by artist_id');
} catch(Exception $e){
	echo $e -> getMessage();
	die();
}

$artists = $results -> fetchAll(PDO::FETCH_ASSOC);

?>
<section class="body">
   <div class="bodyContainer">
      <ul>
	      <?php 
	      		foreach($artists as $artist){
	      		echo '<li><a href="artist.php? id='.$artist["artist_id"].'">'.$artist["artist_name"].'</a></li>'; 
	      		}
	      ?>
      </ul>
   </div>
</section>

<?php
include(ROOT_PATH.'php/includes/footer.php');
?>