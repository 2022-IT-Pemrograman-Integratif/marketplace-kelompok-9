<?php

function curl_login($url, $data_login){
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
$data = array(
    "email"=>"talangin@gmail.com",
    "password"=>"talangin"
);

//fungsi login
/*
$data_login = json_encode($data);
$output = curl_login_kcn('https://kecana.herokuapp.com/login', $data_login);
//echo ($output);
//print_r($output);
$jwt_kcn = $output;
*/

function curl_transfer($url, $data, $jwt){
    $ch = curl_init();
    $curlopt = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer '.$jwt
        )
    );
    curl_setopt_array($ch, $curlopt);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
/*
$data = array(
    "id"=>"43",
    "nohp"=>"08123123124",
    "nominaltransfer"=>5000
);
$output = curl_kcn('https://kecana.herokuapp.com/transfer', json_encode($data));
echo ($output);
*/

function curl($url, $data){
    $ch = curl_init(); 
    $curlopt = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
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
/*
$data_login = array(
    "email"=>"talangin@gmail.com",
    "password"=>"talangin",
    "jwt"=>"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjczIiwibmFtZSI6InRhbGFuZ2luIiwiZW1haWwiOiJ0YWxhbmdpbkBnbWFpbC5jb20iLCJyb2xlIjoidXNlciJ9.OREg7ibHywSPYSWpLxLHSEkwSnVLyZWVGyBeTSPhi1M",
    "tujuan"=>$penerima,
    "jumlah"=>$jumlah
);
$data_login = json_encode($data_login);
$output = curl_login('http://mypadpay.xyz/api/transaksi.php', $data_login);
$jwt = json_decode($output, true);
$jwt = $jwt["token"];
*/
function curl_login_buski($url, $data_login){
    $ch = curl_init(); 
    $curlopt = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data_login
    );
    curl_setopt_array($ch, $curlopt);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
/*
$data_login = array(
    'username'=>'talangin',
    'password'=>'talangin'
);
$output = curl_login_buski('https://arielaliski.xyz/e-money-kelompok-2/public/buskidicoin/publics/login', $data_login);
echo $output;
*/
function curl_transfer_buski($url, $jwt, $data){
    $ch = curl_init();
    $curlopt = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_HTTPHEADER => array('Authorization: Bearer '.$jwt),
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data
    );
    curl_setopt_array($ch, $curlopt);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function curl_login_padpay($url, $data_login){
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

  function curl_login_payphone($url, $data_login){
    $ch = curl_init(); 
    $curlopt = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data_login
    );
    curl_setopt_array($ch, $curlopt);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
  }
  
  

?>