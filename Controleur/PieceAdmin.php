<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 16/05/2017
 * Time: 19:54
 */
include '../Modele/Connexion.php';
$i=1;
$value = $_GET["q"];

$reponse = $BDD->query('SELECT Nom,IdPiece FROM Piece WHERE IdMaison="'.$value.'"');


?>
<SELECT onchange="showUser2(this.value)">
<option selected="selected" value="" >Choisissez</option>
<?php
while($donnees = $reponse->fetch())
{
    $donnees2=$donnees['Nom'];
    $donnees3=$donnees['IdPiece'];

    echo "<option name='$donnees2;' value='$donnees3'>".$donnees2."</option>";

}
?>

</SELECT>




