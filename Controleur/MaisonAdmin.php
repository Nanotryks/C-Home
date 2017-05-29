<?php
include '../Modele/Connexion.php';
$q=$_GET["q"];
$reponse = $BDD->query('SELECT Nom,IdMaison FROM Maison WHERE IdUtilisateur="'.$q.'" ');
$i=1;
?>
<SELECT name="Maison" size="1" onchange="showUser(this.value)">
    <option selected="selected" value="">Choisissez</option>
    <?php
while($donnees = $reponse->fetch())
{
    $donnees2=$donnees['Nom'];
    $donnees3=$donnees['IdMaison'];
    echo "<option name='$donnees2' value='$donnees3'>".$donnees['Nom']."</option>";
    $i++;
}
    ?>
</SELECT>
