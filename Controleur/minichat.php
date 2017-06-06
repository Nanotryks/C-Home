

<?php
// Connexion à la base de données

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=chome2;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT  message FROM minichat ORDER BY ID DESC LIMIT 0, 10');



// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();
