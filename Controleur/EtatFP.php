<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 18/05/2017
 * Time: 22:03
 */
include "../Modele/Connexion.php";
$q=$_GET['q'];
$reponse = $BDD->query('SELECT IdPiece FROM piece WHERE IdMaison="'.$q.'"');
$table=0;
//$i=0;
$entree=0;
while($donnees = $reponse->fetch())
{
    $reponse2=$BDD->query('SELECT Valeur FROM capteur WHERE IdPiece="'.$donnees['IdPiece'].'" and Nom="Fenêtre" ');
    while($donnees2 = $reponse2->fetch())
    {
    $table = $table + $donnees2['Valeur'];
    //$i++;
    }
    $reponse3=$BDD->query('SELECT Valeur FROM capteur WHERE IdPiece="'.$donnees['IdPiece'].'" and Nom="Porte d\'entrée" ');
    while($donnees3 = $reponse3->fetch())
    {
        $entree = $entree + $donnees3['Valeur'];
    }
}

if($table!=0)
{
    echo "Une fenêtre est ouverte dans votre maison";
}
else
{
    echo "Toutes les fenêtres sont fermées dans votre maison ";
}
?>
    </br>
    </br>
<?php
if($entree!=0)
{
    echo "La porte d'entrée est ouverte dans votre maison";
}
else
{
    echo "La porte d'entrée est fermée dans votre maison";
}


