<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 14/06/2017
 * Time: 10:10
 */
$ch = curl_init();
curl_setopt(
    $ch,
    CURLOPT_URL,
    "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=A18C");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);
echo "Raw Data:<br />";
echo("$data");
$data_tab = str_split($data,33);
echo "Tabular Data:<br />";
for( $size=count($data_tab)-2, $i=$size; $i>$size-1; $i--) {
    $trame = $data_tab[$i];

// décodage avec sscanf
    list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
        sscanf($trame, "%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
    echo("Trame " . $i . " $t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");
    if ($v == "1111") {
        echo "il ya quelqu'un <br>";

    } else {
        echo "il ya personne<br>";
    }
}
