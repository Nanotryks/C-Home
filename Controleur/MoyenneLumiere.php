<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 18/05/2017
 * Time: 22:03
 */
include "../Modele/Connexion.php";
$q=$_GET['q'];
$reponse = $BDD->query('SELECT IdPiece FROM piece WHERE IdMaison="'.$q.'"');
$table=0;
$i=0;
while($donnees = $reponse->fetch())
{
    $reponse2=$BDD->query('SELECT Valeur FROM capteur WHERE IdPiece="'.$donnees['IdPiece'].'" and Nom="Lumière" ');
    while($donnees2 = $reponse2->fetch())
    {
    $table = $table + $donnees2['Valeur'];
    $i++;
    }
}

$moyenne = $table/$i;
echo "La lumière moyenne de votre maison est ".floor($moyenne)." Lux";