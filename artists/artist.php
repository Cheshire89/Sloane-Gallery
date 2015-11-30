<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/php/includes/config.php");
include('connect.php');

if(!empty($_GET['id'])){
	$artist_id = intval($_GET['id']);

	 try{
    $results = $db -> prepare('select * from art_works where artist = ?');
    $results -> bindParam(1,$artist_id); //#1 references the "?" and binds a variable to that "?"
    $results -> execute();
    
    } catch (Exception $e){
    
    echo $e->getMessage();
    die();
    }

    $artist = $results -> fetchAll(PDO::FETCH_ASSOC);
    $length = count($artist); //In this case it fetches just a single row;
    if($artist == FALSE){
      echo "Sorry no artist was found with the provided Id";
    }

}
$page = "artist";
include(ROOT_PATH.'php/includes/header.php');
?>
<section class="body">
   <div class="bodyContainer">
    <div class="thumbHolder">
      <?php
      	foreach($artist as $work){
        		echo '<div class="thumbs">';
            //if(isset($work["img"])){
              echo '<img src="img/placeholder.jpg" alt="'.$work["title"].'"/>';
            //}
        		if(isset($work["title"])){
        			echo '<p>'.$work["title"].'</p>';
        		}
        		echo '</div>';
      	}
      ?>
    </div>
   </div>
</section>

<?php
include(ROOT_PATH.'php/includes/footer.php');
?>