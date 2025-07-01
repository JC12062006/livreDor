<?php

	try{
		$users = "monuser";
		$pass = "pZok&61Oxn$?GG4K";
		$bdd = new PDO ('mysql:host=localhost;dbname=projetJoan',$users,$pass);

	}catch (PDOException $e){
		print "Erreur! :" . $e->getMessage() .
		"<br/>";
		die();
	}

?>