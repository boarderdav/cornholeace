<html>
<head>

</head>


<body>



<?php


$fb = new Facebook\Facebook([
    'app_id' => '686534241383052',
    'app_secret' => '49f3d3991c74d0e1101321c7d069a683',
    'default_graph_version' => 'v2.5',
]);

try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get('/me?fields=id,name', '{access-token}');
} catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

$user = $response->getGraphUser();

echo 'Name: ' . $user['name'];
// OR
 echo 'Name: ' . $user->getName();



?>

</body>
</html>
