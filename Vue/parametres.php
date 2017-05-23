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
    <link rel="stylesheet" href="../CSS/Parametres.css"/>
    <link rel="icon" type="ico" href="../Image\Logopic.ico"/>
    <title>Paramètres du compte</title>
</head>

<body>
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
        <li class="barre"><a href="C_home.php">Accueil</a></li>
        <li class="barre"><a href="GererVotreMaison.php">Gérez votre maison</a></li>
        <li class="barre"><a href="CodeStats.html">Statistiques</a></li>
        <li class="barre"><a href="compte.html">Compte</a></li>
    </ul>

    <a href="index.php" target="_blank"><img class="help" type="button" src="../Image/help2.png"
                                                    alt="Besoin d'aide ?" height="4%" width="auto"></a>
</header>

<div>

    <h1>Paramètres du compte </h1>
    <?php
    // Connexion à la base de données
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=chome2;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $reponse = $bdd->query('SELECT nom, prenom, mail, mdp, numero_abonne, telephone FROM utilisateur ORDER BY IdUtilisateur DESC LIMIT 1 ');
    $donnees = $reponse->fetch();


    ?>
    <form action="../Controleur/parametrescible.php" method="post">
        <p>
            <label for="nom">Nom</label> : <br/>
            <input type="text" name="nom" id="nom" value="<?php echo $donnees['nom']; ?>"/>
            <br/>

            <label for="prenom">Prénom</label> : <br/>
            <input type="text" name="prenom" id="prenom" value="<?php echo $donnees['prenom']; ?>"/>
            <br/>

            <label for="mail">Adresse mail associée au compte</label> : <br/>
            <input type="email" name="mail" id="mail" value="<?php echo $donnees['mail']; ?>"/>
            <br/>

            <label for="mdp">Nouveau mot de passe (12 caractères max.)</label> : <br/>
            <input type="password" name="mdp" id="mdp" maxlength="12" value="<?php echo $donnees['mdp']; ?>"/>
            <br/>

            <label for="telephone">Numéro de téléphone</label> : <br/>
            <input type="text" name="telephone" id="telephone" value="<?php echo $donnees['telephone']; ?>"/>
            <br/>

            <label for="numero_abonne">Votre numéro abonné</label> : <br/>
            <input type="text" name="numero_abonne" id="numero_abonne"
                   value="<?php echo $donnees['numero_abonne']; ?>"/>
            <br/>

            <input type="submit" name="submit" value="Sauvegarder"/>
        </p>

    </form>

</div>
</body>
</html>