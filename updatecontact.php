<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://recovr86958.api-us1.com/admin/api.php?api_key=4bdedd2ce5e541ee773917e7996199d0c2d1db52933098f2c5f2dfe42f255c0dfd7e42c7&api_action=contact_sync&api_output=json',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'email=cz%40gmail.com&first_name=cz&last_name=cz&phone=9090902345&p%5B2%5D=2&tags=cz%2Ccx',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded',
    'Cookie: PHPSESSID=54426c56e63302f084977af39f43c770; em_acp_globalauth_cookie=98b6b946-8fb7-45af-92f0-d9b13c579595'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
