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
    <title>Payment success</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/payments.css" rel="stylesheet" media="screen">
    
</head>
<body>
    
    
     <div class='container-narrow'>
        
        
        <hr/>
        <div class="jumbotron hero-unit">
            <h2>Your payment was successful.</h2>
            <p class="lead">If you have any problems email us with this order number and your username</p>
            <p class="lead"><strong>order number</strong>: <?php echo (isset($_POST['txn_id']) && isset($_POST['invoice']))?$_POST['txn_id'].'/'.$_POST['invoice']:'Oops, an error occurred!';?></p>
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