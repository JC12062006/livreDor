<?php
require_once(__DIR__ . '/../modele/signatureModele.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $nom_auteur = trim($_POST['nom'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Vérification des champs requis
    if (!empty($nom_auteur) && !empty($message)) {
        ajouterSignature($nom_auteur, $message);
    }

    // Redirection vers le livre d'or après soumission
    header('Location: ../view/livreDor.php');
    exit();
}
