<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 14/06/2017
 * Time: 10:10
 */
include "start_session.php";
if(isset($_GET['q']))
{
    $choix=$_GET['q'];
}

    if($choix==2)
    {
        $ch = curl_init();
        curl_setopt(
            $ch,
            CURLOPT_URL,
            "http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=00".$_SESSION['IdUtilisateur']."&TRAME=100".$_SESSION['IdUtilisateur']."13020000a3");
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
        echo $data;
    }
    else
    {
        if($choix==3)
        {
            $ch = curl_init();
            curl_setopt(
                $ch,
                CURLOPT_URL,
                "http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=00".$_SESSION['IdUtilisateur']."&TRAME=100".$_SESSION['IdUtilisateur']."13030000a3");
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $data = curl_exec($ch);
            echo $data;
        }
        else
        {
            $ch = curl_init();
            curl_setopt(
                $ch,
                CURLOPT_URL,
                "http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=00".$_SESSION['IdUtilisateur']."&TRAME=100".$_SESSION['IdUtilisateur']."13040000a3");
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $data = curl_exec($ch);
            echo $data;
        }
    }








