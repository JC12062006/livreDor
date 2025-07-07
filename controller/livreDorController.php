<?php
session_start();
require_once(__DIR__ . '/../modele/signatureModele.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ✅ Vérification du CSRF token
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("Erreur CSRF détectée !");
    }

    // ✅ Récupération et nettoyage des données
    $nom_auteur = trim($_POST['nom'] ?? '');
    $email      = trim($_POST['email'] ?? '');
    $telephone  = trim($_POST['telephone'] ?? '');
    $sexe       = $_POST['sexe'] ?? 'Autre';
    $message    = trim($_POST['message'] ?? '');

    // ✅ Validation
    if (empty($nom_auteur) || empty($email) || empty($message)) {
        die("Tous les champs requis doivent être remplis.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Email invalide !");
    }

    // ✅ Ajout sécurisé
    ajouterSignature($nom_auteur, $email, $telephone, $sexe, $message);

    // ✅ On regénère le token pour la prochaine soumission
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

    // ✅ Redirection
    header('Location: ../view/livreDor.php');
    exit();
}
?>
