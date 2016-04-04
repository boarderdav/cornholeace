<?php
session_start();
require_once ('tryCelery.php');
$curl = curl_init();

curl_setopt_array($curl, array(
    $url = "https://api.trycelery.com/v2/products/56ce3a7be4ad561100af4c92",
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_POSTFIELDS => "{\n    \"user_id\": \"514a114080feb60200000001\",\n    \"cancel_url\": \"https://www.yourshop.com\",\n    \"return_url\": \"https://www.yourshop.com/confirmation\",\n    \"buyer\": {\n        \"email\": \"first@last.com\",\n        \"first_name\": \"First\",\n        \"last_name\": \"Last\",\n        \"phone\": \"555-555-5555\"\n    },\n    \"shipping_address\": {\n        \"first_name\": \"First\",\n        \"last_name\": \"Last\",\n        \"company\": \"Celery\",\n        \"line1\": \"123 Street\",\n        \"line2\": null,\n        \"city\": \"New York\",\n        \"state\": \"ny\",\n        \"zip\": \"10012\",\n        \"country\": \"us\",\n        \"phone\": \"555-555-5555\"\n    },\n    \"line_items\": [\n        {\n            \"product_id\": \"531e0b012cf9766885f781b7\",\n            \"quantity\": 1\n        }\n    ]\n}",
    CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "authorization: 6585767a26497d7f1e543fc1edfc7e639232eaf52a44206e7b03ec384abf6ba98f4de0a5e2a5a407895ab910ee0bb4459f78e3f181419287b7f5278112bf4225",
        "cache-control: no-cache",
        "content-type: application/json",
        "postman-token: fcb3c412-a09f-2cdb-2831-130b95a5287c"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

//$json = $response;
$yummy = json_decode($response);
//echo $yummy->meta->code;
echo $yummy->data->user_id;


$GLOBALS['description'] = $yummy->data->description;
$GLOBALS['name'] = $yummy->data->name;
$GLOBALS['user_id'] = $yummy->data->user_id;

//$celeryPic = json_decode($yummy->data->)
$GLOBALS['productPicture'] = $yummy->data->images[0]->url;





if ($err) {
    echo "cURL Error #:" . $err;
} else {
  //  echo $response;
  //  echo $json[1];
  //  print $json->meta->code;
   // echo $response;
   // print $response;

}

