<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 10/06/2017
 * Time: 11:30
 */
include '../Modele/Connexion.php';
$radio=$_POST['mode'];
$capteur=$_POST["capteur"];

if(isset($_POST['valeur']))
{
    $val=intval($_POST['valeur']);
}

if($radio=="manuel")
{
    $BDD->query('UPDATE mode SET mode = "Manuel", Valeur="'.$val.'" WHERE Capteur="'.$capteur.'"');
    $BDD->query('UPDATE capteur SET valeur = "'.$val.'", Mode_Valeur="'.$val.'" WHERE Nom="'.$capteur.'"');

}
else
{
    $reponse=$BDD->query('SELECT Valeur FROM auto WHERE Capteur="'.$capteur.'"');
    while($donnees = $reponse->fetch())
    {
        $val2=intval($donnees['Valeur']);
        $BDD->query('UPDATE mode SET mode = "Automatique", Valeur="'.$val2.'" WHERE Capteur="' . $capteur . '"');
        $BDD->query('UPDATE capteur SET valeur = "'.$val2.'", Mode_Valeur="'.$val2.'" WHERE Nom="'.$capteur.'"');
    }
}
header('Location: ../Vue/GererVotreMaison.php');

