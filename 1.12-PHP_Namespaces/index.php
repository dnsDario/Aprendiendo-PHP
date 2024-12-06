<?php 
require_once "vendor/autoload.php";

use Vendor\Namespaces\Facebook\User as FacebookUser;
use Vendor\Namespaces\Google\User as GoogleUser;

    $type = "google";

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