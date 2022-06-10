<?php
/*
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://arielaliski.xyz/e-money-kelompok-2/public/buskidicoin/publics/login',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('username' => 'talangin','password' => 'talangin'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
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
$data_login = array(
    'username'=>'talangin',
    'password'=>'talangin'
);
$output = curl_login_buski('https://arielaliski.xyz/e-money-kelompok-2/public/buskidicoin/publics/login', $data_login);
$jwt = json_decode($output, true);
$jwt = $jwt["message"]["token"];
echo $jwt;

// function curl_transfer($url, $jwt){
//     $ch = curl_init();
//     $curlopt = array(
//         CURLOPT_URL => $url,
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_ENCODING => '',
//         CURLOPT_MAXREDIRS => 10,
//         CURLOPT_TIMEOUT => 0,
//         CURLOPT_FOLLOWLOCATION => true,
//         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//         CURLOPT_HTTPHEADER => array('Content-Type: application/json', 'Authorization: Bearer '.$jwt),
//         CURLOPT_CUSTOMREQUEST => 'POST',
//         CURLOPT_POSTFIELDS => array(
//             'nomer_hp'=>'08123123123',
//             'nomer_hp_tujuan'=>'08123123124',
//             'e_money_tujuan'=>'Buski Coins',
//             'amount'=>'5000',
//             'description'=>'Transfer Emoney'
//         ),
//         // CURLOPT_POSTFIELDS => $data
//     );
//     curl_setopt_array($ch, $curlopt);
//     $result = curl_exec($ch);
//     curl_close($ch);
//     return $result;
// }

//$data=json_encode($data);
function curl_transfer($url, $jwt, $data){
    $ch = curl_init();
    $curlopt = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$jwt
        )
    );
    curl_setopt_array($ch, $curlopt);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
$data = array(
    'nomer_hp'=>'08123123123',
    'nomer_hp_tujuan'=>'08123123124',
    'e_money_tujuan'=>'Buski Coins',
    'amount'=>'5000',
    'description'=>'Transfer Emoney'
);

$transfer_buski = curl_transfer('https://arielaliski.xyz/e-money-kelompok-2/public/buskidicoin/admin/transfer', $jwt, $data);
echo($transfer_buski);

