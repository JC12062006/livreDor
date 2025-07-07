<?php
try {
    $users = "monuser";
    $pass = "pZok&61Oxn$?GG4K";
    $bdd = new PDO('mysql:host=localhost;dbname=projetJoan;charset=utf8', $users, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    error_log("Erreur PDO : " . $e->getMessage());
    die("Une erreur est survenue. Veuillez réessayer plus tard.");
}
?>
