<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 16/05/2017
 * Time: 20:06
 */
include '../Modele/Connexion.php';
$piece=0;
if(isset($_GET["q"]))
{
    $piece = $_GET["q"];
}
$reponse = $BDD->query('SELECT Nom FROM capteur WHERE IdPiece="'.$piece.'"');
$reponse2 = $BDD->query('SELECT Valeur FROM capteur WHERE IdPiece="'.$piece.'"');

while($donnees = $reponse->fetch())
{
    $donnees2 = $reponse2->fetch();

    echo $donnees['Nom']." : ".$donnees2['Valeur']."<br>";
}