<?php
//session_start();
# login-callback.php
$fb = new Facebook\Facebook([
    'app_id' => '686534241383052',
    'app_secret' => '49f3d3991c74d0e1101321c7d069a683',
    'default_graph_version' => 'v2.5',
]);

$helper = $fb->getRedirectLoginHelper();
try {
    $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (isset($accessToken)) {
    // Logged in!
    $_SESSION['facebook_access_token'] = (string) $accessToken;

    // Now you can redirect to another page and use the
    // access token from $_SESSION['facebook_access_token']
}

?>

<html>
<head>
    <title>login-callback page</title>
</head>
<body>
    <h1>Login-Callback Page</h1>
    <h3>PHP Session</h3>
    <pre><?php print_r($_SESSION); ?></pre>

    <?php if ($user): ?>
        <h3>You</h3>
        <img src="https://graph.facebook.com/<?php echo $user; ?>/picture">

        <h3>Your User Object (/me)</h3>
        <pre><?php print_r($user_profile); ?></pre>
    <?php else: ?>
        <strong><em>You are not Connected.</em></strong>
    <?php endif ?>

    <h3>Public profile of boarderdav</h3>
    <img src="https://graph.facebook.com/boarderdav/picture">
    <?php echo $boarderdav['name']; ?>
</body>
</html>
