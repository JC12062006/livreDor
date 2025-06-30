<?php

	try{
		$users = "root";
		$pass = "";
		$bdd = new PDO ('mysql:host=localhost;dbname=livreDor',$users,$pass);

	}catch (PDOException $e){
		print "Erreur! :" . $e->getMessage() .
		"<br/>";
		die();
	}

?>