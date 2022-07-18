<?php
//add a contact
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://recovr86958.api-us1.com/admin/api.php?api_key=4bdedd2ce5e541ee773917e7996199d0c2d1db52933098f2c5f2dfe42f255c0dfd7e42c7&api_action=contact_add&api_output=json',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'email=abcd%40gmail.com&first_name=abcd&last_name=patel&phone=9090909099&p%5B2%5D=2&tags=api%2Cone%2Ctwo',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded',
    'Cookie: PHPSESSID=09f09948e2b72096269b48350e1c7747; em_acp_globalauth_cookie=ab5b18b8-7086-4524-b4d6-a2c6a9fbae44'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
