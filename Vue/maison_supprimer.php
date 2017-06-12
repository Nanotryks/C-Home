<?php
include '../Controleur/start_session.php';
include '../Vue/header.html';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../CSS/Maison.css"/>


    <title>Suppression d'une maison</title>

    <script type="text/javascript" src="../Js/scroll.js"></script>
</head>

<body>
<!--<img src="Image\Logop.png" alt="Logo de C-Home" class="logo"/>-->

<?php
// Connexion à la base de données

include('../Modele/Connexion.php');
$reponse = $BDD->query('SELECT Porte,Voie,Adresse,Code_Postal,Ville,Nombre_Piece,Nombre_Etage FROM maison WHERE IdUtilisateur="'.$_SESSION['IdUtilisateur'].'"');
?>


<form method="post" action="../Controleur/maisoncible2.php">
    <p><br>
        Veuillez indiquer quel domicile vous voulez retirer :<br/><br>
        <?php while ($donnees = $reponse->fetch()) {
            echo '<input type="radio" name="test" value="' . $donnees['Porte'] . '"  id="test"/>
                    <label for="test">
                ' . $donnees['Porte'] . ' 
                ' .
                $donnees['Voie'] . ' 
                    ' .
                $donnees['Adresse'] . ' 
                    ' .
                $donnees['Code_Postal'] . ' 
                    ' .
                $donnees['Ville'] .
                '</br></label>';
        }
        ?>
        </label></br>
        <input type="submit" name="submit" value="Supprimer la sélection" class="delete"/>
    <br><br>
    </p>
</form>


<?php
include '../Vue/footer.html';
?>
