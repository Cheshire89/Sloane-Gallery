<?php
 
 define("IMG_PATH","images/");

 $listOfPortraits = array();
 $listOfPortraits[] = IMG_PATH."Ernst Neizvestny.jpg";
 $listOfPortraits[] = IMG_PATH."Erik Boulatov.jpg";
 $listOfPortraits[] = IMG_PATH."Eugene Yelchin.jpg";
 $listOfPortraits[] = IMG_PATH."Genia Chef.jpg";
 $listOfPortraits[] = IMG_PATH."Ilya Kabakov.jpg";
 $listOfPortraits[] = IMG_PATH."Komar And Melamid.jpg";
 $listOfPortraits[] = IMG_PATH."Alexander Kosolapov.jpg";
 //$listOfPortraits[] = IMG_PATH."Oleg Tselkov.jpg";
 $listOfPortraits[] = IMG_PATH."Lev Meshberg.jpg";
 //$listOfPortraits[] = IMG_PATH."Leonid Sokov.jpg";
 $listOfPortraits[] = IMG_PATH."Oleg Vassiliev.jpg";
 $listOfPortraits[] = IMG_PATH."Alek Rapoport.jpg";
 $listOfPortraits[] = IMG_PATH."Vladimir Nemukhin.jpg";
 $listOfPortraits[] = IMG_PATH."Oscar Rabine.jpg";

$artists = array(
	$neizvestny = array(
		"title" => "Ernst Neizvestny",
		"img" => IMG_PATH."Ernst Neizvestny.jpg",
		
		"link" => BASE_URL."artists/artist.php?artist=Ernst-Neizvestny"
		),
	$bulatov = array(
		"title" => "Erik Boulatov",
		"img" => IMG_PATH."Erik Boulatov.jpg",
		
		"link" => BASE_URL."artists/artist.php?artist=Erik-Boulatov"
		),
	$yelchin = array(
		"title" => "Eugene Yelchin",
		"img" => IMG_PATH."Eugene Yelchin.jpg",
		
		"link" => BASE_URL."artists/artist.php?artist=Eugene-Yelchin"
		),
	$chef = array(
		"title" => "Genia Chef",
		"img" => IMG_PATH."Genia Chef.jpg",
		
		"link" => BASE_URL."artists/artist.php?artist=Genia-Chef"
		),
	$kabakov = array(
		"title" => "Ilya Kabakov",
		"img" => IMG_PATH."Ilya Kabakov.jpg",
		
		"link" => BASE_URL."artists/artist.php?artist=Ilya-Kabakov"
		),
	$km = array(
		"title" => "Komar & Melamid",
		"img" => IMG_PATH."Komar And Melamid.jpg",
		
		"link" => BASE_URL."artists/artist.php?artist=Komar-Melamid"
		),
	$kosolapov = array(
		"title" => "Alexander Kosolapov",
		"img" => IMG_PATH."Alexander Kosolapov.jpg",
		
		"link" => BASE_URL."artists/artist.php?artist=Alexander-Kosolapov"
		),
	$meshberg = array(
		"title" => "Lev Meshberg",
		"img" => IMG_PATH."Lev Meshberg.jpg",
		
		"link" => BASE_URL."artists/artist.php?artist=Lev-Meshberg"
		),
	$vassiliev = array(
		"title" => "Oleg Vassiliev",
		"img" => IMG_PATH."Oleg Vassiliev.jpg",
		
		"link" => BASE_URL."artists/artist.php?artist=Oleg-Vassiliev"
		),
	$rapoport = array(
		"title" => "Alek Rapoport",
		"img" => IMG_PATH."Alek Rapoport.jpg",
		"link" => BASE_URL."artists/artist.php?artist=Alek-Rapoport"
		),
	$nemukhin = array(
		"title" => "Vladimir Nemukhin",
		"img" => IMG_PATH."Vladimir Nemukhin.jpg",
		"link" => BASE_URL."artists/artist.php?artist=Vladimir-Nemukhin"
		),
	$rabine = array(
		"title" => "Oscar Rabine",
		"img" => IMG_PATH."Oscar Rabine.jpg",
		"link" => BASE_URL."artists/artist.php?artist=Oscar-Rabine"
		),
	);
?>