<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 01/06/2017
 * Time: 16:31
 */
include "../Modele/Connexion.php";
$date = date("Y-m-d");
$reponse=$BDD->query('SELECT valeur FROM donnees WHERE date="'.$date.'"');
while($donnees=$reponse->fetch())
{
    echo "<td>".$donnees['valeur']."°C"."</td>";
}