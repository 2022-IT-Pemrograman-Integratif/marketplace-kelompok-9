<?php
function curl_login_galle($url, $data){
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
}
$data = array(
    "username"=>"talangin",
    "password"=>"talangin"
);
$output = curl_login_galle('https://gallecoins.herokuapp.com/api/users', json_encode($data));
//echo ($output);
$result1 = json_decode($output, true);
echo ($result1);
//$jwt_galle = $output;
?>