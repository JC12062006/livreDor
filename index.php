<?php
session_start();
require_once('./bdd/bdd.php');

$page = $_GET['page'] ?? 'accueil';
$action = $_GET['action'] ?? null;

switch ($page) {
    case 'accueil':
        include('./view/accueil.php');
        break;
    case 'video':
        include('./controller/videoController.php');
        break;
    case 'profil':
        include('./view/profil.php');
        break;
    // etc...
    default:
        include('./view/accueil.php');
}
?>
