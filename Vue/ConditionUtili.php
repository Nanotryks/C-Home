<!doctype html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Condition d'utilisation</title>
    <link rel="icon" type="image/ico" href="Image/Logopic.ico"/>
    <link rel="stylesheet" href="../CSS/ConditionUtili.css"/>
<!--    <link rel="stylesheet" href="../CSS/design_global.css"/>-->
</head>
<body>

<div id="ban"><img src="../Image/ban.png" alt="C-HOME" width="15%" height="auto"/></div>

<div id="bloc0">

    <div id="CondiTitle">
        <h1> Conditions générales d'utilisation </h1>
    </div>


    <div id="condi">

        <br><br>
        <form action="../Controleur/condgen.php" method="post">
            <div class="group">
                <label for="condi" class="label">Entrez les conditions générales d'utilisation :</label>
                <textarea class="zone" name="condition" rows="15" cols="1" type="text" class="input"></textarea>
            </div>

            <br><br><br>
            <input type="submit" class="btn" name="cond" value="Envoyer"><br><br><br>
        </form>
    </div>
</div>
</body>
</html>