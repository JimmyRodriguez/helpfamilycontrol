<?php
/*
    (c) copyright 2011 nadlabs.co.uk. All rights reserved.
    
    
    
    http://www.nadlabs.co.uk/licence.php

*/
require_once ('../includes/oAuth/facebook/facebook.php');
require_once("local_config.php");
require_once(APP_INC_PATH."bootstrap_frontend.php");
session_start();

$sqlCookie = "UPDATE user_table SET cookie_id='', cookie_salt='', cookie_expire='0000-00-00 00:00:00'"
     ." WHERE userid='".$_SESSION['userid']."' ;";

$dataPostBack =  dbase::globalQuery($sqlCookie,$conn,1);
//echo $sqlCookie;
if ($dataPostBack[1] != -1){
  //may want to do something here.
}
else{
  //or here if you need to log anything
  //but for now if this fails, it just moves on.
}
if($_SESSION['logintype']=='facebook'){
    $facebook = new Facebook(array(
            'appId' => APP_ID,
            'secret' => APP_SECRET,
            ));
    //$user = $facebook->getUser();

   
   $token = $facebook->getAccessToken();
   $graph_url = "https://graph.facebook.com/me/permissions?method=delete&access_token=".$token;

   $result = json_decode(file_get_contents($graph_url));


    foreach($_SESSION as $key=>$value){
       
        if(substr($key,0,3)=='fb_'){
                 unset($_SESSION[$key]);
        }
    
    }
}

//session_unset(); //- do not destroy tracking session data
unset($_SESSION['access_token']);
unset($_SESSION['username']);
unset($_SESSION['userid']);
unset($_SESSION['usergroup']);
unset($_SESSION['stale']);
unset($_SESSION['token']);
unset($_SESSION['tempsalt']);
unset($_COOKIE['auth_ub']); 





//session_destroy();
if (isset($_GET['r'])){
    
    if ($_GET['r']==0){
        header("Location: index.php?r=0");
    }
    else{
        header("Location: index.php");
    }
}
else{
    header("Location: index.php");
}

exit;


?>