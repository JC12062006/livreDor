<?php
require_once("../modele/signatureModele.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["message"]) && isset($_SESSION["id"])) {
    ajouterSignature($_SESSION["id"], $_POST["message"]);
    header("Location: ../view/livreDor.php");
    exit();
}
?>
