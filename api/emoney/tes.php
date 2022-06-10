<?php

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
$data_login = array(
  'telepon'=>'08123123123',
  'password'=>'talangin'
);
$output = curl_login_payphone('http://fp-payphone.herokuapp.com/public/api/login', $data_login);
$jwt = json_decode($output, true);
$jwt = $jwt["token"];
echo $jwt;
?>