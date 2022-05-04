<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.bigcommerce.com/stores/store_hash/v3/catalog/products/90224/metafields",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n  \"permission_set\": \"app_only\",\n  \"namespace\": \"Warehouse Locations\",\n  \"key\": \"Location\",\n  \"value\": \"4HG\",\n  \"description\": \"Location in the warehouse\",\n  \"resource_type\": \"product\",\n  \"resource_id\": 111,\n  \"date_created\": \"2018-05-07T20:14:17.000Z\",\n  \"date_modified\": \"2018-05-07T20:14:17.000Z\"\n}",
  CURLOPT_HTTPHEADER => [
    "Accept: application/json",
    "Content-Type: application/json",
    "X-Auth-Token: l7l97641xflq4r4yxrhnx61esy9ujdd"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}