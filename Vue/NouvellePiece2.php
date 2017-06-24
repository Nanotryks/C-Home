<?php
include '../Controleur/start_session.php';
include '../Vue/header.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle Pièce</title>
    <link rel="stylesheet" href="../CSS/GererVotreMaison.css">

    <title>Ajout d'une pièce</title>

    <script type="text/javascript" src="../Js/scroll.js"></script>
    <script type="text/javascript" src="../Js/VerifCaractere.js"></script>
</head>

<body>

<div class="Etat">
    <h3>Ajout Réussi</h3>
<FORM method="post" action="../Controleur/AjoutP.php">
    <p>
        <img class="maison" src="../Image/gerer_maison.png">
    </p>

    <p>
        <SELECT name="Maison" size="1" >
            <option selected="selected" value="">Choisissez</option>
            <?php
                        include "../Controleur/Maison.php";
                        ?>
        </SELECT>
    </p>

        <label>Nom de la pièce</label>
        <br>
        <input type="text" name="Piece" onkeyup="verif3(this)">
    <br>
    <input type="submit" value="Ajouter">
</FORM>
</div>

<
<?php
include '../Vue/footer.html';
?>
</body>
</html>