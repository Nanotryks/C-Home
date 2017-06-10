<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 18/05/2017
 * Time: 18:38
 */
include '../Modele/Connexion.php';
session_start();
$maison = $_POST["Maison"];

$piece =$_POST["Piece"];

$capteur = $_POST["Capteur"];
$idPiece = intval($piece);

if($capteur=='Température')
{

    $reponse=$BDD->query('SELECT Valeur FROM auto WHERE Capteur="'.$capteur.'"');
    while($donnees = $reponse->fetch())
    {
        $val=intval($donnees['Valeur']);
        $BDD ->exec('INSERT INTO capteur(IdPiece, Nom ,Valeur,Mode_Valeur) VALUES ("'.$idPiece.'", "'.$capteur.'", "'.$val.'", "'.$val.'")');
        $reponse2 = $BDD->query('SELECT IdCapteur FROM capteur WHERE Nom="'.$capteur.'" AND IdPiece="'.$idPiece.'"');
        while($donnees2 = $reponse2->fetch())
        {

            $val2=intval($donnees2['IdCapteur']);
            $BDD->exec('INSERT INTO mode(IdUtilisateur, IdCapteur, mode, Capteur ,Valeur) VALUES("' . $_SESSION['IdUtilisateur'] . '", "'.$val2.'", \'Automatique\', "' . $capteur . '", "' . $val . '")');
        }
    }
}
else
{
    if($capteur=='Lumière')
    {
        $reponse=$BDD->query('SELECT Valeur FROM auto WHERE Capteur="'.$capteur.'"');
        while($donnees = $reponse->fetch())
        {

            $val=intval($donnees['Valeur']);
            $BDD ->exec('INSERT INTO capteur(IdPiece, Nom ,Valeur,Mode_Valeur) VALUES ("'.$idPiece.'", "'.$capteur.'", "'.$val.'", "'.$val.'")');
            $reponse2 = $BDD->query('SELECT IdCapteur FROM capteur WHERE Nom="'.$capteur.'" AND IdPiece="'.$idPiece.'"');
            while($donnees2 = $reponse2->fetch())
            {

                $val2=intval($donnees2['IdCapteur']);
                $BDD->exec('INSERT INTO mode(IdUtilisateur, IdCapteur, mode, Capteur ,Valeur) VALUES("'.$_SESSION['IdUtilisateur'].'", "'.$val2.'", \'Automatique\', "' . $capteur . '", "' . $val . '", )');
            }
        }
    }
    else
    {
        $BDD ->exec('INSERT INTO capteur(IdPiece, Nom ,Valeur,Mode_Valeur) VALUES ("'.$idPiece.'", "'.$capteur.'", 0, 0)');
    }
}
header('Location: ../Vue/NouveauCapteur2.php');