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
   <ul>
      <?php
      	foreach($artist as $work){
      		echo "<li>";
      		if(isset($work["title"])){
      			echo $work["title"]." ";
      		}
      		if(isset($work["yearOfcreation"])){
      			echo $work["yearOfcreation"]." ";
      		}
      		if(isset($work["media"])){
      			echo $work["media"]." ";
      		}
      		if(isset($work["size"])){
      			echo $work["size"]." in";
      		}
      		echo "</li>";
      	}

      ?>
    </ul>
   </div>
</section>

<?php
include(ROOT_PATH.'php/includes/footer.php');
?>