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
    <script type="text/javascript" src="../Js/VerifCaractere.js"></script>
</head>

<body>
<!--<img src="Image\Logop.png" alt="Logo de C-Home" class="logo"/>-->


<div>
    <h1>Ajout d'une maison</h1>

    <form class="formulaire_maison" method="post" action="../Controleur/maisoncible.php">
        <p>
            <br>
            <label for="nom">Nom</label> : <br/>
            <input type="text" name="nom" id="nom" onkeyup="verif3(this)"/><br/><br>

            <label for="porte">Numéro de porte</label> : <br/>
            <input type="number" name="porte" id="porte" min="0" onkeyup="verif2(this)"/>
            <br/><br>
            <label for="voie">Type de voie :</label> <br />
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
            <input type="text" name="adresse" id="adresse" onkeyup="verif4(this)">
            <br/><br>

            <label for="code_postal">Code postal</label> : <br/>
            <input type="number" name="code_postal" id="code_postal" maxlength="5" onkeyup="verif2(this)"/>
            <br/><br>

            <label for="ville">Ville</label> : <br/>
            <input type="text" name="ville" id="ville" onkeyup="verif4(this)"/>
            <br/><br>

            <label for="nombre_pieces">Veuillez indiquer le nombre de pièces <br/> dont dispose votre domicile</label> : <br/>
            <input type="number" name="nombre_pieces" id="nombre_pieces" min="0" onkeyup="verif2(this)"/>
            <br/><br>

            <label for="nombre_etages">Veuillez indiquer le nombre d'étages <br/> dont dispose votre domicile</label> : <br/>
            <input type="number" name="nombre_etages" id="nombre_etages" min="0" onkeyup="verif2(this)"/>
            <br/>
            <br/>

            <input type="submit" value="Ajouter une maison" class="add"/><br><br><br>
        </p>
    </form>
</div>

<?php
include '../Vue/footer.html';
?>
<script>
    function verif3(chars) {
        // Caractères autorisés
        var regex = new RegExp("[a-zA-Z0-9ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ_-'\\s]", "i");
        var valid;
        for (x = 0; x < chars.value.length; x++) {
            valid = regex.test(chars.value.charAt(x));
            if (valid == false) {
                chars.value = chars.value.substr(0, x) + chars.value.substr(x + 1, chars.value.length - x + 1); x--;
            }
        }
    }

    function verif4(chars) {
        // Caractères autorisés
        var regex = new RegExp("[A-Za-ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ'-\\s]", "i");
        var valid;
        for (x = 0; x < chars.value.length; x++) {
            valid = regex.test(chars.value.charAt(x));
            if (valid == false) {
                chars.value = chars.value.substr(0, x) + chars.value.substr(x + 1, chars.value.length - x + 1); x--;
            }
        }
    }
</script>
</body>
