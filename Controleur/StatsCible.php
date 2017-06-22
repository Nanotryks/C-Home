<?php
/**
 * Created by PhpStorm.
 * User: Nanotryks-PC
 * Date: 19/06/2017
 * Time: 09:39
 */
include '../Modele/Connexion.php';
include '../Controleur/start_session.php';

$getid = $BDD->query('SELECT IdMaison, Nom FROM maison WHERE IdUtilisateur="' . $_SESSION['IdUtilisateur'] . '"');
while($q = $getid->fetch()){
    //TEMPERATURE
    $reponse = $BDD->query('SELECT IdPiece,Nom FROM piece WHERE IdMaison="'.$q['IdMaison'].'"');
    $table=0;
    $i=0;
    while($donnees = $reponse->fetch())
    {
        $reponse2=$BDD->query('SELECT Valeur FROM donnees WHERE IdUtilisateur="' . $_SESSION['IdUtilisateur'] . '" and Type="Température" ');
        while($donnees2 = $reponse2->fetch()) {
            $table = $table + $donnees2['Valeur'];
            $i++;
        }

    }
    if($i!=0) {
        $moyenne = $table/$i;
        echo '</br>'. '<h3>'.$q['Nom'].'</h3>'. "Température moyenne "." est " . floor($moyenne)." °C";
    }



//LUMIERE

    $reponse = $BDD->query('SELECT IdPiece FROM piece WHERE IdMaison="'.$q['IdMaison'].'"');
    $table=0;
    $i=0;
    while($donnees = $reponse->fetch())
    {
        $reponse2=$BDD->query('SELECT Valeur FROM donnees WHERE IdUtilisateur="' . $_SESSION['IdUtilisateur'] . '" and Type="Lumière" ');
        while($donnees2 = $reponse2->fetch())
        {
            $table = $table + $donnees2['Valeur'];
            $i++;
        }
    }
    if($i!=0) {
        $moyenne = $table / $i;
        echo "</br> Luminosité moyenne "." est ".floor($moyenne)." lux" . '</br>' . '</br>';
    }
};







