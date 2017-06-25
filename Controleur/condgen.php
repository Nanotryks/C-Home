<?php
include '../Modele/Connexion.php';

// Insertion du message à l'aide d'une requête préparée

 if (isset($_POST['condition'])){
     $text=htmlspecialchars($_POST['condition']);
     $text2 = addslashes($text);
     $req = $BDD->exec("UPDATE conditions_d_utilisation SET text = '" . $text2 . "' WHERE id = 1");
}
header("Location: ../Vue/Admin.php");


