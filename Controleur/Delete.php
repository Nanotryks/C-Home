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
$reponse=$BDD->query('SELECT IdCapteur FROM capteur WHERE IdPiece="'.$piece.'"');
while($donnees=$reponse->fetch())
{
    $BDD->query('DELETE FROM mode WHERE IdCapteur="'.$donnees['IdCapteur'].'"');
}

$BDD->query('DELETE FROM capteur WHERE IdPiece="'.$piece.'" and Nom="'.$capteur.'"');

header('Location: ../Vue/DeleteCapteur2.php');