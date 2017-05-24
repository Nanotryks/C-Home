<?php

// Source : http://www.info-3000.com/phpmysql/cryptagedecryptage.php

    $private_key = 'secret_private_key';

function encrypt($private_key, $str_to_crypt) {
    $private_key = md5($private_key);
    $letter = -1;
    $new_str = '';
    $strlen = strlen($str_to_crypt);

    for ($i = 0; $i < $strlen; $i++) {
        $letter++;
        if ($letter > 31) {
            $letter = 0;
        }
        $neword = ord($str_to_crypt{$i}) + ord($private_key{$letter});
        if ($neword > 255) {
            $neword -= 256;
        }
        $new_str .= chr($neword);
    }
    return base64_encode($new_str);
}

function decrypt($private_key, $str_to_decrypt) {
    $private_key = md5($private_key);
    $letter = -1;
    $new_str = '';
    $str_to_decrypt = base64_decode($str_to_decrypt);
    $strlen = strlen($str_to_decrypt);
    for ($i = 0; $i < $strlen; $i++) {
        $letter++;
        if ($letter > 31) {
            $letter = 0;
        }
        $neword = ord($str_to_decrypt{$i}) - ord($private_key{$letter});
        if ($neword < 1) {
            $neword += 256;
        }
        $new_str .= chr($neword);
    }
    return $new_str;
}

?>