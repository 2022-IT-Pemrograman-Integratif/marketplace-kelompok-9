<?php
function curl_login_galle($url, $data_login_galle){
    $ch = curl_init(); 
    $curlopt = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data_login_galle,
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

  function curl_transfer_galle($url, $data_transfer_galle){
    $ch = curl_init(); 
    $curlopt = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data_transfer_galle,
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


?>