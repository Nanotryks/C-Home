<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 18/05/2017
 * Time: 18:38
 */
include '../Modele/Connexion.php';
$maison = $_POST["Maison"];
$id = intval($maison);
echo $id;
$piece =$_POST["Piece"];
echo $piece;

$BDD ->exec('INSERT INTO piece(IdMaison , Nom ) VALUES ("'.$id.'","'.$piece.'")');
header('Location: ../Vue/NouvellePiece2.php');