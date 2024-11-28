<?php 
require_once 'Facebook_Login.php';
require_once 'Google_Login.php';

use Facebook\User as FacebookUser;
use Google\User as GoogleUser;

    $type = "facebook";

    if($type == "facebook"){
        $facebookUser = new FacebookUser();
        $facebookUser->login();
        echo "Facebook User Login";
    } else if($type == "google"){
        $googleUser = new GoogleUser();
        $googleUser->login();
        echo "Google User Login";
    }
    
    

    
    

?>