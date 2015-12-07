<?php 
function initiateDb(){
	try{
	$db = new PDO('mysql:host=127.0.0.1; dbname=gallery_db','root','Sasha446');
	$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e) {
	echo $e->getMessage();
	die();
	}

	return $db;
}

function setId(){
	if(!empty($_GET['id'])){
		$artist_id = intval($_GET['id']);
		return $artist_id;
	}else {
		echo "<h3>The Id Could not be found. </h3>";
	}
}


function loadArtistWorks($sqlStr){
	$db = initiateDb();	
	
	$artist_id = setId();

	 try{
    $results = $db -> prepare($sqlStr);
    $results -> bindParam(1,$artist_id); //#1 references the "?" and binds a variable to that "?"
    $results -> execute();
    
    } catch (Exception $e){
    
    echo $e->getMessage();
    die();
    }

    $artist = $results -> fetchAll(PDO::FETCH_ASSOC);
    
    if($artist == FALSE){
      echo "Sorry no artist was found with the provided Id";
    }

return $artist;
}

function loadListOfArtists(){
	$db = initiateDb();
	
	try{
	$results = $db -> query('select * from artists order by artist_id');
	} catch(Exception $e){
	echo $e -> getMessage();
	die();
	}

$artists = $results -> fetchAll(PDO::FETCH_ASSOC);

return $artists;
}

?>