<?php
	$ignoreListArtists = array(1,36,53);
	$ignoreListArtWorks = array(40,109,158,159,278,280);
	$ukranians = array(3,15,17,30,38,51);
	$change_order = array(16,27,32,54,61);

function printUkranians($ukranians){
	$query = '';
	$i=0;
	foreach($ukranians as $artist){
		if($i == 0){
			$query .= 'artist='.$artist;
			$i++;
		} else{
			$query .= ' or artist='.$artist;
			$i++;
		} 
	}
	return $query;
}
?>