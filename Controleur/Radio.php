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

if($mode=="Manuel")
{

    echo "<input type='radio' name='mode' value='auto' onclick='showUser4(this.value)' ><label>Automatique</label>";
    echo "<input type='radio' name='mode' value='manuel' checked><label>Manuel</label><br><br>";
    echo "<input type='text' name='valeur'><br><br>";
    echo "<input type='submit' value='Changer la valeur'>";


}
else
{

        echo "<input type='radio' name='mode' value='auto' checked><label>Automatique</label>";
        echo "<input type='radio' name='mode' value='manuel' onclick='showUser4(this.value)'><label>Manuel</label><br><br>";
        echo "<input type='submit' value='Changer de mode'>";

}
