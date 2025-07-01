<?php

session_start();

include('view/commun/header.php');

$page = isset($_GET['page']) ? $_GET['page']: 'accueil';

switch($page){

    
    case 'livreDor':
        include('view/livreDor.php');
        break;

    
    default:
        include('view/accueil.php');
        break;
    
    case 'consultation':
        include('view/consultation.php');
        break;

}

include('view/commun/footer.php');
?>