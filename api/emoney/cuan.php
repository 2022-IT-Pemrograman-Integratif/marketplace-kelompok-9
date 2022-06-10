<?php

function curl_login_cuan($url, $data_login){
    $ch = curl_init(); 
    $curlopt = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data_login,
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

$data_login = array(
    "number"=>"08123123123",
    "password"=>"talangin"
);
$output = curl_login_cuan('https://e-money-kelompok-12.herokuapp.com/api/login', json_encode($data_login));
$jwt_peace = json_decode($output, true);
$jwt_peace = $jwt_peace["token"];
//echo($jwt_peace);

function curl_cuan($url, $data, $jwt_cuan){
    $ch = curl_init();
    $curlopt = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer '.$jwt_cuan
        )
    );
    curl_setopt_array($ch, $curlopt);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}








?>