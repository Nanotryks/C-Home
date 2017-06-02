<?php
include '../Controleur/start_session.php';
include '../Vue/header.html';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../CSS/Parametres.css"/>

    <title>Modification des paramètres</title>

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

<?php
include '../Vue/footer.html';
?>
</body>
</html>