<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 09/05/2017
 * Time: 09:14
 */

    $user = 'root';
    $password = '';
    $database ='essaie' ;
    $BDD = new PDO('mysql:host=localhost;dbname=chome2;charset=utf8', 'root', '');
    if (!$BDD) {
        printf("échec de la connexion");
        exit();
    }

/*function recuperer($BDD,$select,$table,$liste,$valeur)
{
    if($select==null)
    {
        $select = '*';
    }
    if($liste==null){
        $reponse = $BDD->query('SELECT $select FROM $table');
        return $reponse;
    }
    ELSE
    {
       $reponse = $BDD->query('SELECT $select FROM $table WHERE $liste=$valeur');
        echo $reponse['Valeur'];
        return $reponse;
    }

}
*/
if (!function_exists('random_int')) {
    function random_int($min, $max) {
        if (!function_exists('mcrypt_create_iv')) {
            trigger_error(
                'mcrypt must be loaded for random_int to work',
                E_USER_WARNING
            );
            return null;
        }

        if (!is_int($min) || !is_int($max)) {
            trigger_error('$min and $max must be integer values', E_USER_NOTICE);
            $min = (int)$min;
            $max = (int)$max;
        }

        if ($min > $max) {
            trigger_error('$max can\'t be lesser than $min', E_USER_WARNING);
            return null;
        }

        $range = $counter = $max - $min;
        $bits = 1;

        while ($counter >>= 1) {
            ++$bits;
        }

        $bytes = (int)max(ceil($bits/8), 1);
        $bitmask = pow(2, $bits) - 1;

        if ($bitmask >= PHP_INT_MAX) {
            $bitmask = PHP_INT_MAX;
        }

        do {
            $result = hexdec(
                    bin2hex(
                        mcrypt_create_iv($bytes, MCRYPT_DEV_URANDOM)
                    )
                ) & $bitmask;
        } while ($result > $range);

        return $result + $min;
    }
}


