<?php
include '../Modele/Connexion.php';
session_start();
$reponse = $BDD->query('SELECT Nom,IdMaison FROM Maison WHERE IdUtilisateur="'.$_SESSION['IdUtilisateur'].'" ');
$donnees4=0;
$i=0;
while($donnees = $reponse->fetch())
{
    $donnees2=$donnees['Nom'];
    $donnees3=$donnees['IdMaison'];
    echo "<option name='$donnees2' value='$donnees3'>".$donnees['Nom']."</option>";
    if($i==0)
    {
        $donnees4=$donnees['IdMaison'];
    }
    $i++;
}
?>
</SELECT>
<br><br>
<br>
<br>
<div id="Capteur">
<?php
$reponse = $BDD->query('SELECT IdPiece FROM piece WHERE IdMaison="'.$donnees4.'"');
$table=0;
$i=0;
while($donnees = $reponse->fetch())
{
    $reponse2=$BDD->query('SELECT Valeur FROM capteur WHERE IdPiece="'.$donnees['IdPiece'].'" and Nom="Lumière" ');
    while($donnees2 = $reponse2->fetch())
    {
        $table = $table + $donnees2['Valeur'];
        $i++;
    }
}
if($i!=0) {
    $moyenne = $table / $i;
    echo "L'intensité lumineuse moyenne de votre maison est de " . floor($moyenne) . " Lux";
}
else{
    echo "Aucun capteur de luminosité n'est installé chez vous";
}
?>

</div>
