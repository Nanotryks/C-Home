<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 16/05/2017
 * Time: 20:06
 */
include '../Modele/Connexion.php';
$piece = 0;
if (isset($_GET["q"])) {
    $piece = $_GET["q"];
}
$reponse = $BDD->query('SELECT Nom FROM capteur WHERE IdPiece="' . $piece . '"');
$reponse2 = $BDD->query('SELECT Valeur FROM capteur WHERE IdPiece="' . $piece . '"');

while ($donnees = $reponse->fetch()) {
    $donnees2 = $reponse2->fetch();

//    switch ($donnees['Nom'])
//    {
//        case 'Température' :
//        {
//            echo $donnees['Nom'] . " : " . $donnees2['Valeur'] . " °C" . "<br>";
//            echo "<br>";
//        }break;
//        case 'Humidité' :
//        {
//            echo $donnees['Nom'] . " : " . $donnees2['Valeur'] . " °C" . "<br>";
//            echo "<br>";
//        }break;
//        case 'Porte d\'entrée' :
//        {
//            if ($donnees2['Valeur'] == 0)
//            {
//                echo $donnees['Nom'] . " : " . " est fermée" . "<br>";
//                echo "<br>";
//            }
//            else
//            {
//                if ($donnees2['Valeur'] == 0)
//                {
//                    echo $donnees['Nom'] . " : " . " est ouverte" . "<br>";
//                    echo "<br>";
//                }
//            }
//        }break;
//        case 'Fenêtre' :
//        {
//            if ($donnees2['Valeur'] == 0)
//            {
//                echo $donnees['Nom'] . " : " . " est fermée" . "<br>";
//                echo "<br>";
//            }
//            else
//            {
//                if ($donnees2['Valeur'] == 0)
//                {
//                    echo $donnees['Nom'] . " : " . " est ouverte" . "<br>";
//                    echo "<br>";
//                }
//            }
//        }break;
//        case 'Fumée' :
//        {
//            echo $donnees['Nom'] . " : " . $donnees2['Valeur'] . " °C" . "<br>";
//            echo "<br>";
//        }break;
//        default :
//        {
//            echo "Vous n'avez actuellement aucun capteur de configuré" . "<br>";
//            echo "<br>";
//        }
//    }
//
//
//    }

    if ($donnees['Nom'] == 'Température') {
        echo $donnees['Nom'] . " : " . $donnees2['Valeur'] . " °C" . "<br>";
        echo "<br>";
    }
    else
        {
         if ($donnees['Nom'] == "Humidité") {
            echo $donnees['Nom'] . " : " . $donnees2['Valeur'] . " %" . "<br>";
            echo "<br>";
        }
        else
        {
            if ($donnees['Nom'] == "Lumière") {
                echo $donnees['Nom'] . " : " . $donnees2['Valeur'] . " Lux" . "<br>";
                echo "<br>";
            }
            else{
                if ($donnees['Nom'] == "Fumée") {
                    echo $donnees['Nom'] . " : " . $donnees2['Valeur'] . "<br>";
                    echo "<br>";
                }
                else{
                    if ($donnees['Nom'] == "Porte d\'entrée") {
                        if ($donnees2['Valeur'] == 0) {
                            echo $donnees['Nom'] . " : " . " est fermée" . "<br>";
                            echo "<br>";
                        } else if ($donnees2['Valeur'] == 0) {
                            echo $donnees['Nom'] . " : " . " est ouverte" . "<br>";
                            echo "<br>";
                        }
                    }

                    else{

                        if ($donnees['Nom'] == "Fenêtre") {
                            if ($donnees2['Valeur'] == 0) {
                                echo $donnees['Nom'] . " : " . " Fermée" . "<br>";
                                echo "<br>";

                            } else if ($donnees2['Valeur'] == 0) {
                                echo $donnees['Nom'] . " : " . " Ouverte" . "<br>";
                                echo "<br>";

                            }
                        }

                        else{
                            if ($donnees['Nom']== "Présence") {
                                if ($donnees2['Valeur'] == 0) {
                                    echo $donnees['Nom'] . " : " . "Aucune présence détectée" . "<br>";
                                    echo "<br>";
                                } else if ($donnees2['Valeur'] == 0) {
                                    echo $donnees['Nom'] . " : " . "Présence détectée" . "<br>";
                                    echo "<br>";
                                }
                            }
                            }

                        }

                    }


                }
            }

        }



}







