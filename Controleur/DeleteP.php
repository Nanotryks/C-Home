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
$BDD->query('DELETE FROM capteur WHERE IdPiece="'.$piece.'"');

$BDD->query('DELETE FROM piece WHERE IdPiece="'.$piece.'"');
header('Location: ../Vue/DeletePiece2.php');