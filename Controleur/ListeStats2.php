<?php
include '../Modele/Connexion.php';

$getid = $BDD->query('SELECT IdMaison, Nom FROM maison WHERE IdUtilisateur="' . $_SESSION['IdUtilisateur'] . '"');
$getpiece=$BDD->query('SELECT Nom FROM maison WHERE IdUtilisateur="' . $_SESSION['IdUtilisateur'] . '"');
$getdonnee= $BDD->query('SELECT Type, Valeur, date, time FROM donnees WHERE IdUtilisateur = "' . $_SESSION['IdUtilisateur'] . '" AND Type="Lumière" ORDER by date ');

while ($donnees = $getdonnee->fetch()) {
    echo '
   <tr>
      <td> ' . $donnees['date'] . '</td>
      <td>' . $donnees['time'] . '</td>
      <td>' . $donnees['Valeur'] . '</td>
   </tr>';
}


