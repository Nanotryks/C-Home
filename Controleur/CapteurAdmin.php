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


    if (strcmp($donnees['Nom'],'Température') == 1){
        echo $donnees['Nom']." : ".$donnees2['Valeur']." °C"."<br>";
        echo "<br>";
    }

    if (strcmp($donnees['Nom'], "Humidité") == 1){
        echo $donnees['Nom']." : ".$donnees2['Valeur']." %"."<br>";
        echo "<br>";
    }

    if (strcmp($donnees['Nom'], "Lumière")==1){
        echo $donnees['Nom']." : ".$donnees2['Valeur']." Lux"."<br>";
        echo "<br>";
    }
    if (strcmp($donnees['Nom'], "Fumée")==1){
        echo $donnees['Nom']." : ".$donnees2['Valeur']."<br>";
        echo "<br>";
    }
    if (strcmp($donnees['Nom'], "Porte d\'entrée")==1){
        if ($donnees2['Valeur']==0){
            echo $donnees['Nom']." : ". " est fermée"."<br>";
            echo "<br>";
        }
        else if ($donnees2['Valeur']==0){
            echo $donnees['Nom']." : ". " est ouverte"."<br>";
            echo "<br>";
        }
    }

    if (strcmp($donnees['Nom'], "Fenêtre")==1){
        if ($donnees2['Valeur']==0){
            echo $donnees['Nom']." : ". " est fermée"."<br>";
        }
        else if ($donnees2['Valeur']==0){
            echo $donnees['Nom']." : ". " est ouverte"."<br>";
        }
    }

    if (strcmp($donnees['Nom'], "Présence")==1){
        if ($donnees2['Valeur']==0){
            echo $donnees['Nom']." : ". "Aucune présence détectée"."<br>";
            echo "<br>";
        }
        else if ($donnees2['Valeur']==0){
            echo $donnees['Nom']." : ". "Présence détectée"."<br>";
            echo "<br>";
        }
    }

    else {
        echo "Vous n'avez actuellement aucun capteur de configuré"."<br>";
        echo "<br>";
    }
}