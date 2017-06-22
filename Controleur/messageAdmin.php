<?php
include '../Modele/Connexion.php';
$q=$_GET["q"];
if($q==1){
$reponse = $BDD->query('SELECT * FROM message');
$donnees = $reponse->fetch();
echo $donnees['message'];

    
}