<?php
/*
    (c) copyright 2011 nadlabs.co.uk. All rights reserved.
    
    
    
    http://www.nadlabs.co.uk/licence.php

*/
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
require_once("local_config.php");
require_once(APP_INC_PATH."bootstrap_frontend.php");
require_once(APP_INC_PATH."recaptchalib.php");
sessionsClass::site_protection(true,true,false,false);

//demo


    
    
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Payment cancelled</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/payments.css" rel="stylesheet" media="screen">
</head>
<body>
  
  
  
  
   <div class='container-narrow'>
        
        
        <hr/>
        <div class="jumbotron hero-unit">
            <h2>Your payment appears to have been declined.</h2>
            <p class="lead">If you feel this is incorrect or if your payment keeps on failing please contact us with the email you tried
                                                to register with along with the username you used during registration.
                                                
                                              
            </p>
            <p class="lead">If you were attempting to renew or upgrade your membership please send us your exisiting details.
            </p>
            
        
        </div>
        <hr/>
    

    
    
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ubf_js.1.3.js"></script>
    
    <script>
            $( document ).ready(function() {
                set_screen_res();
                
                
                
                
                
                
            });
    </script>
</body>

</html>