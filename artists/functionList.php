<?php 
function getWorkId(){
	if(!empty($_GET['workId'])){
		$id = intval($_GET['workId']);
		return $id;
	}else {
		return "<h2>Work Id could not be found </h2><br/>";
	}
}

function getArtistId(){
	if(!empty($_GET['artistId'])){
		$artist_id = intval($_GET['artistId']);
		return $artist_id;
	}else{
		return "<h2>Artist with give id could not be found. </h2><br/>";
	}
}
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

function selectParamQuery($sqlStr){
	$db = initiateDb();	

	$numOfParam = substr_count($sqlStr, '?');
	$artistId = getArtistId();
	$workId = getWorkId();
	
	try{
    $results = $db -> prepare($sqlStr);
    if( intval($workId)){
    $results -> bindParam(1,$workId);
    } elseif (intval($artistId)) {
    $results -> bindParam(1,$artistId);  	
    } 
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

function selectQuery($sqlStr){
	$db = initiateDb();
	
	try{
	$results = $db -> query($sqlStr);
	} catch(Exception $e){
	echo $e -> getMessage();
	die();
	}

$artists = $results -> fetchAll(PDO::FETCH_ASSOC);

return $artists;
}

?>