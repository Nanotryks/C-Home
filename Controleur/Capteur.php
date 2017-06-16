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
    "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=A18C");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);
$data_tab = str_split($data,33);
for( $size=count($data_tab)-2, $i=$size; $i>$size-1; $i--) {
    $trame = $data_tab[$i];

// décodage avec sscanf
    list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
        sscanf($trame, "%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
    if ($v == "1111") {
        $BDD->exec('UPDATE capteur SET Valeur=1 WHERE IdPiece="' . $id . '" and Nom="Présence"');

    } else {
        $BDD->exec('UPDATE capteur SET Valeur=0 WHERE IdPiece="' . $id . '" and Nom="Présence"');
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