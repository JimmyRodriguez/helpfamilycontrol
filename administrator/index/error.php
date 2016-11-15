<?php
/*
    (c) copyright 2011 nadlabs.co.uk. All rights reserved.
    
    
    
    http://www.nadlabs.co.uk/licence.php

*/
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
require_once("local_config.php");
require_once(APP_INC_PATH."bootstrap_frontend.php");

sessionsClass::sessionStart();
//need on all external facing pages that a user may enter the site on (saveReferalData) after session started (sessionStart)
sessionsClass::saveReferalData();

    
    
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Wooops!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/payments.css" rel="stylesheet" media="screen">
    
</head>
<body>
    <div class='container-narrow'>
        
        
        <hr/>
        <div class="jumbotron hero-unit">
            <h1>Looks like something unexplainable happened.</h1>
            <p class="lead">we're not sure what happened, try going back a page or try again later.</p>
            <p class="lead"><strong>error code </strong>: <?php echo (isset($_GET['q']))?$_GET['q']:'unknown';?></p>
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