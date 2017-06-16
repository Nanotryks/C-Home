<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>C-HOME</title>
    <link rel="icon" href="../Image/Logopic.ico">

    <link rel="stylesheet" type="text/css" href="../CSS/javascript.fullPage.css"/>

    <style>
        /* Reset du CSS
         * --------------------------------------- */
        body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre,
        form, fieldset, input, textarea, p, blockquote, th, td {
            padding: 0;
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        table {
            border-spacing: 0;
        }

        fieldset, img {
            border: 0;
        }

        address, caption, cite, code, dfn, em, strong, th, var {
            font-weight: normal;
            font-style: normal;
        }

        strong {
            font-weight: bold;
        }

        ol, ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        caption, th {
            text-align: left;

        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: normal;
            font-size: 100%;
            margin: 0;
            padding: 0;
            color: #444;
        }

        q:before, q:after {
            content: '';
        }

        abbr, acronym {
            border: 0;
        }

        /* Custom CSS
         * --------------------------------------- */
        body {
            font-family: arial, helvetica;
            color: #F2F2F2;
        }

        h1 {
            font-size: 6em;
        }

        p {
            font-size: 2em;
        }

        .content {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
        }

        /* Section 1
         * --------------------------------------- */
        #section0 {
            background-color: #ffffff;
        }

        #section0 h1 {
            color: #444;
        }

        #section0 p {
            color: #333;
            opacity: 0.4;
        }

        /* Section 2
         * --------------------------------------- */
        #section1 {
            background-color: white;
        }

        #section1 h1 {
            color: #fff;
        }

        #section1 p {
            opacity: 0.8;
        }

        /*#slide1 {*/
        /*background-image: url('../Image/int1.png');*/
        /*background-size: 100%;*/
        /*}*/

        /*#slide2 {*/
        /*background-image: url(../Image/pics/int2.jpg);*/
        /*background-size: 100%;*/
        /*}*/

        /*#slide3 {*/
        /*background-image: url(../Image/pics/int3.jpg);*/
        /*background-size: 100%;*/
        /*}*/

        /*#slide4 {*/
        /*background-image: url(..\www\C-Home\Image\pics\int1.jpg);*/
        /*background-size: 100%;*/
        /*}*/

        /* Section 3
         * --------------------------------------- */
        #section2 {
            background-color: #000000;
        }

        #section2 h1 {
            color: red;
        }

        #section2 p {
            opacity: 0.6;
        }

        #formulaire {
            color: red;
            font-weight: 400;
        }

        #nav {
            background-color: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 50px;
            top: 0;
            position: absolute;
            z-index: 999;
            background-color: #000;
            opacity: 0.8;
            padding-top: 10px;

        }

        #sign {
            text-align: right;
        }

        #nav #sign #con {
            font-family: Arial;
            font-size: 32px;
            padding-left: 10px;
            padding-right: 10px;
            color: #fff;
            margin-right: 2%;
        }

        #nav #sign :hover {
            font-family: Arial;
            font-size: 32px;
            padding-left: 10px;
            padding-right: 10px;
            color: #a8a8a8;
            margin-right: 2%;
        }

        #onglet1 {
            text-align: left;
            height: 50px;
            top: 0;
            position: absolute;
            z-index: 999;
            opacity: 0.8;
            padding-top: 10px;
        }

        #onglet2 {
            text-align: left;
            height: 50px;
            top: 0;
            position: absolute;
            z-index: 999;
            opacity: 0.8;
            padding-top: 10px;
        }

        #nav #onglet #onglet1 {
            font-family: Arial;
            font-size: 32px;
            padding-left: 10px;
            padding-right: 10px;
            color: #fff;
            margin-left: 5%;

        }

        #nav #onglet #onglet1:hover {
            font-family: Arial;
            font-size: 32px;
            padding-left: 10px;
            padding-right: 10px;
            color: #a8a8a8;
            margin-left: 5%;
            margin-top: 0.1%;
        }

        #nav #onglet #onglet2 {
            font-family: Arial;
            font-size: 32px;
            padding-left: 10px;
            padding-right: 10px;
            color: #fff;
            margin-left: 20%;

        }

        #nav #onglet #onglet2:hover {
            font-family: Arial;
            font-size: 32px;
            padding-left: 10px;
            padding-right: 10px;
            color: #a8a8a8;
            margin-left: 20%;
            margin-top: 0.1%;

        }

        /* Section 4
         * --------------------------------------- */
        #section3 {
            background-color: #ffffff;
        }

        #section3 h1 {
            color: #444;
        }

        #section3 p {
            color: #333;
            opacity: 0.4;
        }

        #rencontre{
            text-decoration: none;
            color: #ff1400;
            font-weight: 600;
        }

    </style>
</head>
<body>
<div id="nav">
    <div id="sign">
        <a id="con" href="Connexion.php"> Connectez-vous </a>
    </div>
    <div id="onglet">
        <a id="onglet1" href="Index.php#secondPage"> Informations </a>
        <a id="onglet2" href="Index.php#3rdPage"> Souscrire</a>
    </div>
</div>

<div id="fullpage">
    <div class="section " id="section0">
        <div class="content">
<!--            <h1>C-HOME</h1>-->
                <img src="../Image/LOGO11-3.png" height="100" width="auto">
            <p><br>DOMISEP</p>
        </div>
    </div>
    <div class="section" id="section1">
        <div class="slide" id="slide1">


            <div class="content">


                <div class="back">
                    <h1>LA SOLUTION</h1>
                    <p>
                        <br>
                        La solution domotique qu'il vous faut </br><br>


                        Passez au niveau supérieur en connectant l'intégralité de votre domicile
                    </p>
                </div>
            </div>
        </div>
        <div class="slide" id="slide2">
            <div class="content">
                <h1>CONTRÔLE</h1>
                <p>
                    <br>
                    Contrôlez votre domicile où que vous soyez </br><br>
                    Munissez-vous d'une connexion internet et connectez vous à l'interface C-HOME </br><br>
                    L'interface vous permettra de gérer la totalité des capteurs de votre domicile
                </p>
            </div>
        </div>
        <div class="slide" id="slide3">
            <div class="content">
                <h1>SUIVI</h1>
                <p>
                    <br>
                    Suivez les données enregistrées par vos capteurs </br><br>
                    Une section "Statistiques" vous permettra d'obtenir des informations poussées sur votre
                    domicile </br><br>
                    Celle-ci est composée de statistiques journalière, hebdomadaire et mensuelle
                </p>
            </div>
        </div>

        <div class="slide" id="slide4">
            <div class="content">
                <h1>ACCOMPAGNEMENT</h1>
                <p>
                    <br>
                    En cas de prôbleme, vous n'êtes pas seul </br><br>
                    Une section dédiée a la résolution de prôblèmes est présente </br><br>
                    Celle-ci permet de contacter le service technique de manière simple et rapide
                </p>
            </div>
        </div>
        <div class="slide" id="slide5">
            <div class="content">
                <h1>LES OFFRES</h1>
                <p>
                    <br>
                    Cette solution innovante vous est proposé sous forme d'abonnement </br><br>
                    Cet abonnement comprend les capteurs ainsi qu'un suivi </br><br>
                    2 formules vous sont proposées : </br><br>

                    - Le <b>'STARTER PACK'</b> comprend des capteurs moyenne gamme</br><br>
                    - Le <b>'ADVANCED PACK'</b> comprend des capteurs haut de gamme</br><br>
                </p>
            </div>
        </div>
    </div>


    <div class="section" id="section2">

        <div class="content">
            <h1>ADOPTEZ C-HOME ?</h1>
            <p><br>
                Voulez vous faire un bond dans le futur avec C-HOME ?</br><br>
                Pour cela, <a id="rencontre" href="../Vue/Index.php#4thpage"> rencontrez un conseiller C-HOME  </a> </br><br>
            </p>

        </div>
    </div>


    <div class="section" id="section3">
        <div class="content">
            <h1>RENCONTRE</h1>
            <p><br>
                Pour prendre un rendez vous, remplissez le formulaire ci-dessous</br><br>
                 <a id="formulaire" href="../Vue/FormulaireRDV.php">FORMULAIRE</a>

            </p>
        </div>
    </div>
</div>


    <script type="text/javascript" src="../Js/javascript.fullPage.js"></script>
    <script type="text/javascript">
        fullpage.initialize('#fullpage', {
            anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage'],
            menu: '#menu',
            css3: true
        });

    </script>

</body>
</html>
