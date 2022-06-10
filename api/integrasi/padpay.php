<?php
function curl_login_padpay($url, $data_login_padpay){
    $ch = curl_init(); 
    $curlopt = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data_login_padpay,
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

function curl_transfer_padpay($url, $data_transfer_padpay, $jwt_padpay){
    $ch = curl_init();
    $curlopt = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data_transfer_padpay,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'.
            'Authorization: Bearer '. $jwt_padpay
        )
    );
    curl_setopt_array($ch, $curlopt);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}



?>