<?php
function curl_login_peacepay($url, $data_login_peacepay){
    $ch = curl_init(); 
    $curlopt = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data_login_peacepay,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        )
    );
    curl_setopt_array($ch, $curlopt);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function curl_transfer_peacepay($url, $data_transfer_peacepay, $jwt_peacepay){
    $ch = curl_init();
    $curlopt = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data_transfer_peacepay,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer '. $jwt_peacepay
        )
    );
    curl_setopt_array($ch, $curlopt);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}



?>