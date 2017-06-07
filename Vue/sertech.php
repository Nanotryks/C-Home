<?php
include '../Controleur/start_session.php';
include '../Vue/header.html';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Service Technique</title>
    <link rel="stylesheet" href="../CSS/sertech.css"/>

    <title>Service technique</title>

    <script type="text/javascript" src="../Js/scroll.js"></script>
</head>

<body>

<div id="bloctot">

    <div id="bloc_contacterconseiller" class="">
        <div class="bloc_titre">
            <br>
            <h2>CONTACTER UN CONSEILLER</h2>

            <script>
                function myNewFunction(sel) {
                    document.getElementById("result").innerHTML = sel.options[sel.selectedIndex].id;
                }
            </script>
            <select name="group" id="group" onChange="myNewFunction(this);">
                <option value="0" id="0159595932">Type de support requis</option>
                <option value="1" id="0188946890">Service technique capteurs</option>
                <option value="2" id="0125934344">Service technique réseaux</option>
                <option value="3" id="0134595959">Service technique sécurité</option>
                <option value="4" id="0153464744">Autre</option>
            </select>

            <div id="bloc_telephone" class=" Par Téléphone">
                <h3>Par Téléphone</h3></div>
            <div id="result">
            </div>
            </br>
            </br>
            <div id="horaires">
                - du Mardi au Samedi de 8h30 à 20h
                <br/>- le samedi de 8h30 à 17h
            </div>
            <div id="bloc_mail" class=" Par mail">
                <h3>Par Mail</h3>
            </div>
            <div id="content">
                <p><a id="mail" href="mailto:lyes.bounoua@isep.fr">Envoyez-moi un e-mail !</a></p>
            </div>
        </div>
    </div>

    <div id="bloc_envoyertechnicien" class="">
        <br>
        <h2>ENVOYER UN TECHNICIEN </h2>

        <br>


        <p>
            <label for="pseudo">Numéro d'utilisateur :</label> <br/>
            <br>
            <input type="text" name="pseudo" id="pseudoP1" maxlength="4" size="4" value="XXXX"
                   onFocus="javascript:this.value=''"/>

            <br>
            <br>

            <br>
            <!--                <textarea name="explication" rows=5 cols=40>  </textarea><br/>-->
            <!--                <br>-->
            <!--                <input type="submit" value="Envoyer"/>-->

            <form method="post">
        <p>

            <label for="message">Détails du problème :</label></p> <input type="text" name="message" id="message" size="20"/><br/>

            <br>
            <input type="submit" value="Envoyer"/>
        </p>
        </form>
        <?php
        //            // Connexion à la base de données
        //            include '../Controleur/Connexion.php';

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=chome2;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        // Insertion du message à l'aide d'une requête préparée
        $req = $bdd->prepare('INSERT INTO minichat (message) VALUES(?)');
        if (isset($_POST['message'])) {
            $req->execute(array($_POST['message']));
        }


        ?>


        </p>
        <br>
        <br>
        <br>
        <br>


    </div>

</div>
</div>
<footer>
    <br>
    <div id="photos">
        <h1>Nos capteurs</h1>
        <br>
        <p><img id="p1" src="../Image/photo1.jpeg" width="200px" height="auto"/><img id="p4" src="../Image/photo2.png"
                                                                                     width="200px" height="auto"/><img
                    id="p3" src="../Image/photo3.jpeg" width="200px" height="auto"/></p>
    </div>

    <br>
</footer>

<?php
include '../Vue/footer.html';
?>
</body>
</html>