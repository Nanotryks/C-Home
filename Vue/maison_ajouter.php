<?php
include '../Controleur/start_session.php';
include '../Vue/header.html';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../CSS/Maison.css"/>


    <title>Ajout d'une maison</title>

    <script type="text/javascript" src="../Js/scroll.js"></script>
</head>

<body>
<!--<img src="Image\Logop.png" alt="Logo de C-Home" class="logo"/>-->


<div>
    <h1>Ajout d'une maison</h1>

    <form class="formulaire_maison" method="post" action="../Controleur/maisoncible.php">
        <p>
            <br>
            <label for="nom">Nom</label> : <br/>
            <input type="text" name="nom" id="nom"/><br/><br>

            <label for="porte">Numéro de porte</label> : <br/>
            <input type="number" name="porte" id="porte" min="0"/>
            <br/><br>
            <label for="voie">Type de voie </label> :<br />
            <select name="voie" id="voie">
                <option value="rue">Rue</option>
                <option value="boulevard">Boulevard</option>
                <option value="avenue">Avenue</option>
                <option value="place">Place</option>
                <option value="impasse">Impasse</option>
                <option value="chemin">Chemin</option>
            </select>
            <br/><br>

            <label for="adresse">Nom de la voie</label> : <br/>
            <input type="text" name="adresse" id="adresse">
            <br/><br>

            <label for="code_postal">Code postal</label> : <br/>
            <input type="number" name="code_postal" id="code_postal" step="10"/>
            <br/><br>

            <label for="ville">Ville</label> : <br/>
            <input type="text" name="ville" id="ville"/>
            <br/><br>

            <label for="nombre_pieces">Veuillez indiquer le nombre de pièces <br/> dont dispose votre domicile</label> : <br/>
            <input type="number" name="nombre_pieces" id="nombre_pieces" min="0"/>
            <br/><br>

            <label for="nombre_etages">Veuillez indiquer le nombre d'étages <br/> dont dispose votre domicile</label> : <br/>
            <input type="number" name="nombre_etages" id="nombre_etages" min="0"/>
            <br/>
            <br/>

            <input type="submit" value="Ajouter une maison" class="add"/><br><br><br>
        </p>
    </form>


<?php
include '../Vue/footer.html';
?>