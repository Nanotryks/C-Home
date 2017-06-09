<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 09/06/2017
 * Time: 23:43
 */
include "../Modele/Connexion.php";
session_start();
$q=$_GET["q"];
$reponse = $BDD->query('SELECT mode FROM mode WHERE mode.IdUtilisateur="'.$_SESSION["IdUtilisateur"].'" AND Capteur="'.$q.'"');
$mode=0;
while($donnees = $reponse->fetch())
{
    $mode = $donnees['mode'];
}

if($mode="Automatique")
{
    echo "<input type='radio' name='mode' id='auto' checked><label>Automatique</label>";
    echo "<input type='radio' name='mode' id='auto' ><label>Manuel</label>";

}
else
{
    echo "<input type='radio' name='mode' id='auto' ><label>Automatique</label>";
    echo "<input type='radio' name='mode' id='auto' checked><label>Manuel</label>";
}