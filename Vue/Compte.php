<?php

include '../Vue/header.html';?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Compte.css" />

    <title>Gestion de compte utilisateur</title>

    <script type="text/javascript" src="../Js/scroll.js"></script>
</head>

<body>
<footer>
    <div id="back">
        <div id="gest">
            <br>
            <br>

            <div class ="para">
Gestion du compte utilisateur
</div>

            <div class ="choix" id="choice">

                <div id="bloc1">


                </div>
                <br>

                <p><a href="parametres.php">Paramètres du compte</a></p>
                <p><a href="sertech.php">Service technique</a></p>
                <p><a href="maison.php">Ajouter/Supprimer Maison</a></p>
            </div>

        </div>
    </div>

</footer>


<?php
include '../Vue/footer.html';
?>
</body>

</html>