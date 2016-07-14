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
		
		"link" => BASE_URL."artists/Ernst_Neizvestny"
		),
	$bulatov = array(
		"title" => "Erik Boulatov",
		"img" => IMG_PATH."Erik Boulatov.jpg",
		
		"link" => BASE_URL."artists/Erik_Boulatov"
		),
	$yelchin = array(
		"title" => "Eugene Yelchin",
		"img" => IMG_PATH."Eugene Yelchin.jpg",
		
		"link" => BASE_URL."artists/Eugene_Yelchin"
		),
	$chef = array(
		"title" => "Genia Chef",
		"img" => IMG_PATH."Genia Chef.jpg",
		
		"link" => BASE_URL."artists/Genia_Chef"
		),
	$kabakov = array(
		"title" => "Ilya Kabakov",
		"img" => IMG_PATH."Ilya Kabakov.jpg",
		
		"link" => BASE_URL."artists/Ilya_Kabakov"
		),
	$km = array(
		"title" => "Komar & Melamid",
		"img" => IMG_PATH."Komar And Melamid.jpg",
		
		"link" => BASE_URL."artists/Komar_Melamid"
		),
	$kosolapov = array(
		"title" => "Alexander Kosolapov",
		"img" => IMG_PATH."Alexander Kosolapov.jpg",
		
		"link" => BASE_URL."artists/Alexander_Kosolapov"
		),
	$meshberg = array(
		"title" => "Lev Meshberg",
		"img" => IMG_PATH."Lev Meshberg.jpg",
		
		"link" => BASE_URL."artists/Lev_Meshberg"
		),
	$vassiliev = array(
		"title" => "Oleg Vassiliev",
		"img" => IMG_PATH."Oleg Vassiliev.jpg",
		
		"link" => BASE_URL."artists/Oleg_Vassiliev"
		),
	$rapoport = array(
		"title" => "Alek Rapoport",
		"img" => IMG_PATH."Alek Rapoport.jpg",
		"link" => BASE_URL."artists/Alek_Rapoport"
		),
	$nemukhin = array(
		"title" => "Vladimir Nemukhin",
		"img" => IMG_PATH."Vladimir Nemukhin.jpg",
		"link" => BASE_URL."artists/Vladimir_Nemukhin"
		),
	$rabine = array(
		"title" => "Oscar Rabine",
		"img" => IMG_PATH."Oscar Rabine.jpg",
		"link" => BASE_URL."artists/Oscar_Rabine"
		),
	);
?>