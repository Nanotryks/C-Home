<?php
session_start();
if (!isset($_SESSION['pass'])) {
	header ('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../CSS/Maison.css"/>
    <link rel="icon" type="ico" href="../Image/Logopic.ico"/>
    <title>Lieux de résidence</title>
</head>

<body>
<!--<img src="Image\Logop.png" alt="Logo de C-Home" class="logo"/>-->
<header>
    <nav class="top">
        <div><a href="../Controleur/logout.php"> <input type="button" value="Déconnexion"></a>
            Langue :
            <SELECT name="Langue" size="1">
                <OPTION>Français
                <OPTION>English
            </SELECT>
        </div>
    </nav>
    <center><img class="image" src="../Image/ban.png"></center><!-- width="300" height="500"-->
    <ul class="bar">
        <li class="barre"><a href="C_Home.php">Accueil</a></li>
        <li class="barre"><a href="GererVotreMaison.php">Gérez votre maison</a></li>
        <li class="barre"><a href="CodeStats.html">Statistiques</a></li>
        <li class="barre"><a href="compte.html">Compte</a></li>
    </ul>

    <a href="index.php" target="_blank"><img class="help" type="button" src="../Image/help2.png"
                                                    alt="Besoin d'aide ?" height="4%" width="auto"/><a/>
</header>

<div>

    <?php
    // Connexion à la base de données
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=chome2;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $reponse = $bdd->query('SELECT Porte,Voie,Adresse,Code_Postal,Ville,Nombre_Piece,Nombre_Etage FROM maison');
    $reponse2 = $bdd->query('SELECT Porte,Voie,Adresse,Code_Postal,Ville,Nombre_Piece,Nombre_Etage FROM maison');
    ?>


    <h1>Lieux de résidence</h1>
    <form class="choix" method="post" action="../Controleur/maisoncible.php">
        <label for="choix_maison">Veuillez indiquer votre lieu de résidence actuel :</label><br/>
        <select name="choix_maison" id="choix_maison">
            <?php while ($donnees = $reponse->fetch()) {
                echo '<option value="maison1"' . $donnees['Porte'] . '">
                    ' . $donnees['Porte'] .
                    ' ' .
                    $donnees['Voie'] .
                    ' ' .
                    $donnees['Adresse'] .
                    ' ' .
                    $donnees['Code_Postal'] .
                    ' ' .
                    $donnees['Ville'] .
                    '</option>';
            } ?>
            </option>

        </select>

        </br>
        </br>
        <input type="submit" name="maison_actuelle" value="Faire de cette adresse mon adresse actuelle"/>
        </br>
        </br>
        <img src="..\Image\addhouse.png" alt="ajout d'une maison" class="addhouse"/></br>
        <a href="maison_ajouter.php"><input type="button" name="Ajouter une maison " value="Ajouter une maison"/></a></br></br>
        <img src="..\Image\deletehouse.png" alt="supression d'une maison" class="deletehouse"/></br>
        <a href="maison_supprimer.php"><input type="button" name="Supprimer une maison " value="Supprimer une maison"/></a></br> </br>

    </form>
</div>
<h1>Votre maison</h1>
<p class="votre_maison">
    <?php $donnees2 = $reponse2->fetch();?>
    Nombre de pièces : <?php echo $donnees2['Nombre_Piece']?> </br>

    Nombre d'étages : <?php echo $donnees2['Nombre_Etage']?>
</p>
</body>

</html>