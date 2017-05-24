
<?php
include('../Modele/Connexion.php');
$q=$_GET["q"];

$reponse2 = $BDD->query('SELECT Nom,Porte,Voie,Adresse,Code_Postal,Ville,Nombre_Piece,Nombre_Etage FROM maison WHERE Porte="'.$q.'"');
$donnees2 = $reponse2->fetch();?>
    Nombre de pièces : <?php echo $donnees2['Nombre_Piece']?> </br>

    Nombre d'étages : <?php echo $donnees2['Nombre_Etage']?>

