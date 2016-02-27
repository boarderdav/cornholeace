<?php
$fb = new Facebook\Facebook([
    'app_id' => '686534241383052', // Replace {app-id} with your app id
    'app_secret' => '49f3d3991c74d0e1101321c7d069a683',
    'default_graph_version' => 'v2.5',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://new.cornholeace.comfb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>