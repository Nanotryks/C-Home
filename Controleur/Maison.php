<?php
include '../Modele/Connexion.php';
$reponse = $BDD->query('SELECT Nom,IdMaison FROM Maison');
$i=1;
while($donnees = $reponse->fetch())
{
    $donnees2=$donnees['Nom'];
    $donnees3=$donnees['IdMaison'];
    echo "<option name='$donnees2' value='$donnees3'>".$donnees['Nom']."</option>";
    $i++;
}
