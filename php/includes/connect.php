<?php
try{
	$db = new PDO('mysql:host=127.0.0.1; dbname=gallery_db','root','Sasha446');
	$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(Exception $e) {
	echo $e->getMessage();
	die();
}
?>
