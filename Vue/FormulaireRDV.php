<!DOCTYPE html>


<html>
<head>
    <meta charset="UTF-8">
    <title> Formulaire de Rendez-vous </title>

    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../Image/Logopic.ico">

</head>

<body>
<div class="logo"><img src="../Image/LOGO11-3.png" width="400" height="150" alt="logo de mon site" title="mon logo"/>
</div>
<div class="enveloppe">
    <div class="login">
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Demander un
            rendez-vous</label>
        <br>
        <div class="forme">


            <!--                form inscription-->
            <form action="Index.php">

                <div class="group">
                    <label for="pass" class="label">Prenom</label>
                    <input id="pass" name="prenom" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">NOM</label>
                    <input id="pass" name="nom" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">adresse email</label>
                    <input id="pass" name="email" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Telephone</label>
                    <input id="pass" name="telephone" type="text" class="input">
                </div>
                <div id="Question" class="group">
                    <label for="creneau" class="label">Dates disponibles</label><br>
                    <select name="Select">
                        <option selected="selected">Sélectionnez un créneau</option>
                        <option name="27" value="27">27 juin 2017</option>
                        <option name="28" value="28">28 juin 2017</option>
                        <option name="29" value="29">29 juin 2017</option>
                        <option name="30" value="30">30 juin 2017</option>
                        <option name="3" value="3">3 juillet 2017</option>
                    </select>
                    </br>
                    </br>

                </div>
                <div id="Question" class="group">
                    <label for="horaires" class="label">Horaires disponibles</label><br>
                    <select name="Select">
                        <option selected="selected">Sélectionnez un horaire</option>
                        <option name="Morning" value="Morning">9h - 12h</option>
                        <option name="Noon" value="Noon">14h - 17h</option>

                    </select>
                </div>

                </br>
                <div class="group">
                    <input type="submit" class="bouton" value="Prendre Rendez-Vous">
                </div>
                <div class="hr"></div>
            </form>
        </div>
    </div>
</div>
</div>


</body>
</html>

