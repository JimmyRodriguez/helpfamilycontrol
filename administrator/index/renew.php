<?php
require_once("../config/config_global.php");
include_once('../config/config.inc.php'); 
include_once('../config/global_config.inc.php');
require_once("../includes/bootstrap_frontend.php");
sessionsClass::sessionStart();
sessionsClass::saveReferalData();
include_once(APP_INC_PATH.'payment_inc/ca_inc.php');


    
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head><meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">


    <title>Renewing your membership</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/payments.css" rel="stylesheet" media="screen">
        
</head>
   <body onLoad="document.membership_ok.submit();">
       <div class='container-narrow'>
        
        
            <hr/>
            <div class="jumbotron hero-unit">
                    
                 <h2>Processing your payment...</h2>
                 <p class="lead">Please do NOT refresh the page or navigate away from this page.</p>
                 <form method="POST" name="membership_ok" action="<?php echo $paypal['url'];?>">
    
                    <input type="hidden" name="business" value="<?php echo $paypal['business'];?>">
                    <input type="hidden" name="cmd" value="<?php echo $paypal['cmd'];?>">
                    <input type="hidden" name="image_url" value="<? echo $paypal['site_url'].$paypal['image_url']; ?>">
                    <input type="hidden" name="return" value="<? echo $paypal['site_url'].$paypal['success_url'] ;?>">
                    <input type="hidden" name="cancel_return" value="<? echo $paypal['site_url'].$paypal['cancel_url'] ;?>">
                    <input type="hidden" name="notify_url" value="<? echo $paypal['notify_url'] ;?>">
                    <input type="hidden" name="rm" value="2">
                    <input type="hidden" name="currency_code" value="<?php echo $paypal['currency_code'];?>">
                    <input type="hidden" name="lc" value="GB">
                    <input type="hidden" name="bn" value="<?php echo $paypal['bn'];?>">
                    <input type="hidden" name="cbt" value="<?php echo $paypal['continue_button_text'];?>">
                    
                    <input type="hidden" name="item_name" value="<?php echo 'renew membership';?>">
                    <input type="hidden" name="amount" value="<?php echo $fee;?>">
                    <input type="hidden" name="invoice" value="<?php echo $invoiceNumber;?>">
                    
                    <input type="hidden" name="quantity" value="1">
                        
    
                </form>
                    
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