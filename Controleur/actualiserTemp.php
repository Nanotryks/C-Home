<?php
include('../Modele/Connexion.php');
$alea = random_int(10,30);
$alea1 = random_int(10,30);
$alea2 = random_int(10,30);
$alea3 = random_int(10,30);
$BDD->exec('UPDATE capteur SET Valeur="'.$alea.'" WHERE Nom=\'Température\' and IdPiece=1');
$BDD->exec('UPDATE capteur SET Valeur="'.$alea1.'" WHERE Nom=\'Température\' and IdPiece=2');
$BDD->exec('UPDATE capteur SET Valeur="'.$alea2.'" WHERE Nom=\'Température\' and IdPiece=3');
$BDD->exec('UPDATE capteur SET Valeur="'.$alea3.'" WHERE Nom=\'Température\' and IdPiece=4');
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
