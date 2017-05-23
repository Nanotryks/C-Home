<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 18/05/2017
 * Time: 16:35
 */
include '../Modele/Connexion.php';
$piece=0;
if(isset($_GET["q"]))
{
    $piece = $_GET["q"];
}
$reponse = $BDD->query('SELECT Nom FROM capteur WHERE IdPiece="'.$piece.'"');

?>
<select id="Capteur" name="Capteur" size="1">
    <option selected="selected" value="">Choisissez</option>
    <?php
while($donnees = $reponse->fetch())
{
    $capteur3 = $donnees['Nom'];
    echo "<option  name='$capteur3'>".$donnees['Nom']."</option>";
}
?>
</select>