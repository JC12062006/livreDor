<?php
include ('bdd/bdd.php');
include ('modele/utilisateurModele.php');

$utilisateurModel= new utilisateur($bdd);
$utilisateurs = $utilisateurModel->listeUser();

?>