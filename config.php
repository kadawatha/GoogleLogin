<?php
@ob_start();
session_start();
require_once "GoogleAPI/vendor/autoload.php";
$gClient=new Google_Client();
$gClient->setClientId("269362820611-c61sh31ibk2n5ph3o0h8sspdmcot69u6.apps.googleusercontent.com");
$gClient->setClientSecret("RvHmupc16Q8jP7K_zS2XFatV");
$gClient->setApplicationName("CPI Login Tutorial");
$gClient->setRedirectUri("http://admoohost.net/GoogleLogin/g-callback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

?>




















