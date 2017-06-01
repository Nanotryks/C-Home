<?php
include '../Controleur/start_session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../CSS/Parametres.css"/>
    <link rel="stylesheet" href="../CSS/design_global.css" />
    <link rel="stylesheet" href="../CSS/bouton_remonter.css" />
    <link rel="icon" href="../Image/Logopic.ico">
    <title>Suppresion d'une maison</title>

    <script type="text/javascript" src="../Js/scroll.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("p.modif").toggle();
    $("button").click(function(){
        $("p.modif").toggle();
    });
});
</script>
</head>

<body>
<header id="haut">
    <a class="retour" href="javascript:history.go(-1)">⇦</a>
    <a class="avancer" href="javascript:history.go(+1)">⇨</a>
    <nav>
        <a href="../Controleur/logout.php" class="top">
            Déconnexion
        </a>
    </nav>
    <center><img class="image" src="../Image/ban.png"></center><!-- width="300" height="500"-->
    <ul class="bar">
        <li class="barre"><a href="C_home.php">Accueil</a></li>
        <li class="barre"><a href="GererVotreMaison.php">Gérez votre maison</a></li>
        <li class="barre"><a href="CodeStats.php">Statistiques</a></li>
        <li class="barre"><a href="compte.html">Compte</a></li>
    </ul>

    <a href="Aide.html" target="_blank"><img class="help" type="button" src="../Image/help2.png"
                                                    alt="Besoin d'aide ?" height="4%" width="auto"></a>
</header>

<div>

    <h1>Paramètres du compte </h1>
    <?php
    // Connexion à la base de données
    include('../Modele/Connexion.php');
    $reponse = $BDD->query('SELECT nom, prenom, mail, mdp, numero_abonne, telephone FROM utilisateur WHERE IdUtilisateur="'.$_SESSION['IdUtilisateur'].'"');
//    ORDER BY IdUtilisateur DESC LIMIT 1 ');
    $donnees = $reponse->fetch();

    ?>
    <p class="affichage">
    <?php echo "Nom:"." ".$donnees['nom'].'<br>'."Prenom:"." ".$donnees['prenom'].'<br>'."Email:"." ".$donnees['mail'].'<br>'."Telephone: 0".$donnees['telephone'].'<br>'."Votre Numero abonné:"." ".$donnees['numero_abonne']; ?></p>
    <button class="button">Modifier les Parametres</button>
    <form action="../Controleur/parametrescible.php" method="post">
        
        <p class="modif">
            <label for="nom">Nom</label><br/>
            <input type="text" name="nom" id="nom" value="<?php echo $donnees['nom']; ?>"/>
            <br/>

            <label for="prenom">Prénom</label><br/>
            <input type="text" name="prenom" id="prenom" value="<?php echo $donnees['prenom']; ?>"/>
            <br/>

            <label for="mail">Adresse mail associée au compte</label> <br/>
            <input type="email" name="mail" id="mail" value="<?php echo $donnees['mail']; ?>"/>
            <br/>

            <label for="mdp">Nouveau mot de passe <br/> (12 caractères max)</label> <br/>
            <input type="password" name="mdp" id="mdp" value="<?php echo $donnees['mdp']; ?>"/>
            <br/>

            <label for="telephone">Numéro de téléphone</label> <br/>
            <input type="text" name="telephone" id="telephone" value="<?php echo $donnees['telephone']; ?>"/>
            <br/>

            <label for="numero_abonne">Votre numéro abonné</label><br/>
            <input type="text" name="numero_abonne" id="numero_abonne"
                   value="<?php echo $donnees['numero_abonne']; ?>"/>
            <br/>

            <input type="submit" name="submit" value="Sauvegarder"/>
        </p>

    </form>

</div>

<div id="pied">

    <a name="haut" id="haut"</a>
    <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.onscroll = function(ev) {
                document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
            };
        });
    </script>

    <p>
        <br>
        <br>
        <br>
        <br>
        À PROPOS
        <br>
        <br>
        Copyright 2017 C-HOME.
        <br>
        <br>
        All Rights Reserved.

        <br>
        <br>
        <br>
        <br>
    </p>
</div>
</body>
</html>