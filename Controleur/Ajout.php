<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 18/05/2017
 * Time: 18:38
 */
include '../Modele/Connexion.php';
$maison = $_POST["Maison"];

$piece =$_POST["Piece"];

$capteur = $_POST["Capteur"];
$idPiece = intval($piece);
$BDD ->exec('INSERT INTO capteur(IdPiece, Nom ,Valeur) VALUES ("'.$idPiece.'", "'.$capteur.'", 0)');
header('Location: ../Vue/NouveauCapteur2.php');