<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26/05/2017
 * Time: 10:49
 */
include "../Modele/Connexion.php";
if(isset($_GET["q"]))
{
    $id=$_GET["q"];
    $reponse = $BDD->query('SELECT nom, prenom, mail, telephone, numero_abonne FROM utilisateur WHERE IdUtilisateur="'.$id.'"');
    while($donnees = $reponse->fetch())
    {
        echo "<br><br>"."Nom : ".$donnees["nom"]."<br></br> "."Prénom : ".$donnees["prenom"]."<br></br> "."Mail : ".$donnees["mail"]."<br></br> "."Numéro Abonné : ".$donnees["numero_abonne"];
    }

    $id=$_GET["q"];
    $reponse = $BDD->query('SELECT IdMaison, Porte, Voie, Adresse, Code_Postal, Ville FROM maison WHERE IdUtilisateur="'.$id.'"');
    while($donnees = $reponse->fetch())
    {
        echo "<br><br>"."Id Maison : ".$donnees["IdMaison"]."<br></br> "."Adresse : ".$donnees["Porte"]." ".$donnees["Voie"]." ".$donnees["Adresse"]
        ." ".$donnees["Ville"]." ".$donnees["Code_Postal"];
    }
}
