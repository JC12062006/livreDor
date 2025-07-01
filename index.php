<?php

session_start();

include('view/commun/header.php');

$page = isset($_GET['page']) ? $_GET['page']: 'accueil';

switch($page){
    case 'login':
        include ('view/login.php');
        break;
    case 'inscription':
        include ('view/inscription.php');
        break;
    case 'profil':
        include('view/profil.php');
        break;
    case 'deconnection':
        session_destroy();
        header('Location:http://127.0.0.1/livreDor/');
        exit();
        break;
    
    default:
        include('view/accueil.php');
        break;
}

include('view/commun/footer.php');
?>