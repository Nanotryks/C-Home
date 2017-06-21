<?php

include '../Modele/Connexion.php';
$piece=0;
global $id;
    if (isset($_GET["q"])) {
        $piece = $_GET["q"];
        $id = $piece;
}

$ch = curl_init();
curl_setopt(
    $ch,
    CURLOPT_URL,
    "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=0039");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);
$data_tab = str_split($data,33);
for( $size=count($data_tab)-2, $i=$size; $i>$size-2; $i--) {
    $trame = $data_tab[$i];

// décodage avec sscanf
    list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
        sscanf($trame, "%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
    $reponse5 = $BDD->query('SELECT IdMaison FROM maison WHERE IdUtilisateur="' . intval($o) . '"');
    echo empty($reponse5);
    $donnees5 = $reponse5->fetch();
    $reponse3 = $BDD->query('SELECT Valeur FROM capteur WHERE IdPiece="' . $id . '" AND Nom="Présence"');
    $reponse4 = $BDD->query('SELECT Valeur FROM capteur WHERE IdPiece="' . $id . '" AND Nom="Humidité"');

    if (!empty($reponse3)) {
        while ($donnees3 = $reponse3->fetch()) {
            // $donnees4 = $reponse4->fetch();

            if ($c == "3") {
                if ($v == "1111" && intval($donnees3['Valeur']) != 1) {
                    echo 'bonjours';
                    $BDD->exec('UPDATE capteur SET Valeur=1 WHERE IdPiece="' . $id . '" AND Nom="Présence"');
                } else {
                    if ($v == "0000" && intval($donnees3['Valeur']) != 0) {
                        $BDD->exec('UPDATE capteur SET Valeur=0 WHERE IdPiece="' . $id . '" AND Nom="Présence"');
                    }
                }
            }
        }
    }
        if (!empty($reponse4)) {
        while ($donnees4 = $reponse4->fetch()) {
            if ($c == "4" && $donnees4['Valeur'] != $v) {
                $v = (100 * $v) / 4096;
                $BDD->exec('UPDATE capteur SET Valeur="' . $v . '" WHERE IdPiece="' . $id . '" AND Nom="Humidité"');
            }
        }

    }
}
    $reponse = $BDD->query('SELECT Nom FROM capteur WHERE IdPiece="' . $id . '"');
    $reponse2 = $BDD->query('SELECT Valeur FROM capteur WHERE IdPiece="' . $id . '"');

        while ($donnees = $reponse->fetch()) {
            $donnees2 = $reponse2->fetch();

//    echo $donnees['Nom']." : ".$donnees2['Valeur']."<br>";

            if ($donnees['Nom'] == 'Température') {
                echo $donnees['Nom'] . " : " . $donnees2['Valeur'] . " °C" . "<br>";
                echo "<br>";
            } else {
                if ($donnees['Nom'] == "Humidité") {
                    echo $donnees['Nom'] . " : " . $donnees2['Valeur'] . " %" . "<br>";
                    echo "<br>";
                } else {
                    if ($donnees['Nom'] == "Lumière") {
                        echo $donnees['Nom'] . " : " . $donnees2['Valeur'] . " Lux" . "<br>";
                        echo "<br>";
                    } else {
                        if ($donnees['Nom'] == "Fumée") {
                            echo $donnees['Nom'] . " : " . $donnees2['Valeur'] . "<br>";
                            echo "<br>";
                        } else {
                            if ($donnees['Nom'] == "Porte d\'entrée") {
                                if ($donnees2['Valeur'] == 0) {
                                    echo $donnees['Nom'] . " : " . " est fermée" . "<br>";
                                    echo "<br>";
                                } else if ($donnees2['Valeur'] == 0) {
                                    echo $donnees['Nom'] . " : " . " est ouverte" . "<br>";
                                    echo "<br>";
                                }
                            } else {

                                if ($donnees['Nom'] == "Fenêtre") {
                                    if ($donnees2['Valeur'] == 0) {
                                        echo $donnees['Nom'] . " : " . " Fermée" . "<br>";
                                        echo "<br>";
                                    } else if ($donnees2['Valeur'] == 0) {
                                        echo $donnees['Nom'] . " : " . " Ouverte" . "<br>";
                                        echo "<br>";
                                    }
                                } else {
                                    if ($donnees['Nom'] == "Présence") {
                                        if ($donnees2['Valeur'] == 0) {
                                            echo $donnees['Nom'] . " : " . "Aucune présence détectée" . "<br>";
                                            echo "<br>";
                                        } else if ($donnees2['Valeur'] == 1) {
                                            echo $donnees['Nom'] . " : " . "Présence détectée" . "<br>";
                                            echo "<br>";
                                        }
                                    } else {
                                        echo "Vous n'avez actuellement aucun capteur de configuré" . "<br>";
                                        echo "<br>";
                                    }

                                }

                            }


                        }
                    }

                }
            }

        }


