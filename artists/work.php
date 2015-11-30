<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/php/includes/config.php");
include('connect.php');

if(!empty($_GET['id'])){
	
   $work_id = intval($_GET['id']);

	 try{
    $results = $db -> prepare('select * from art_works where work_id = ?');
    $results -> bindParam(1,$work_id); //#1 references the "?" and binds a variable to that "?"
    $results -> execute();
    
    } catch (Exception $e){
    
    echo $e->getMessage();
    die();
    }

    $work = $results -> fetchAll(PDO::FETCH_ASSOC); //In this case it fetches just a single row;
    if($work == FALSE){
      echo "Sorry no artist was found with the provided Id";
    }

}
$page = "artist";
include(ROOT_PATH.'php/includes/header.php');
?>
<section class="body">
   <div class="bodyContainer">
    

   </div>
</section>

<?php
include(ROOT_PATH.'php/includes/footer.php');
?>