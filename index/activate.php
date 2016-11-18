<?php
require_once("local_config.php");
require_once(APP_INC_PATH."bootstrap_frontend.php");


sessionsClass::site_protection(true,true,false,false);

require_once(APP_INC_PATH."/no_script_includes/activate_inc.php");  


?>


<!DOCTYPE html>
<html>
    <head>
        <title>userBase v1.3 - the bootstrap reboot!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <style>
            .form-signin{
                border-radius: 5px;
                border: solid 1px #ebebeb;
                padding: 10px;
            }
            
            .alert{
                padding: 4px 35px 4px 14px;
                float: left;
                margin-left: 10px;
                margin-bottom: 0px;
                display: none;
            }
            .btn{
                margin-bottom: 10px;
            }
            .hide{
                display: none;
            }
            .input-recaptcha {
                width:172px;
            }
            #index-btns{
                margin-top: 20px;
            }
            .clb{clear: both}
            #confirm_form{
                margin-left: 20px;
            }
        </style>
        
    </head>
    <body>
            
            <div class="container">
                <div class="navbar clearfix">
                        <div class="btn-group pull-left " id="index-btns">
                            <a href="index.php" class="btn">Register</a>
                  
                            <a href="forgot.php" class="btn">Forgot password</a>
                            <a href="reactivate.php" class="btn">Re-send activation email</a>
                            
                            <a href="contactus.php" class="btn">Contact us</a>
                            <a href="login-facebook.php" class="btn">Login with Facebook</a>
                            <a href="login-twitter.php" class="btn">Login with Twitter</a>
                            <a href="openid.php" class="btn">Login with OpenID</a>
                        </div>
                </div>
                
                
                <blockquote>
                    <p>
                        Welcome to the userBase 1.3 user front end playground.
                    </p>
                    
                    <small>
                    Here you can access all the front end account activation functionality.
                    </small>
                </blockquote>
                <form class="form-signin clearfix" id="ge_login_form"  name="ge_login_form">
                    <input type="hidden" id="ge_loc"  name="ge_loc" value="user">
                    <input type="text" placeholder="Username" id="ge_username"  name="ge_username">
                    <input type="password" placeholder="Password" id="ge_password"  name="ge_password">
                    <input type="hidden"  id="ge_rem_real"  name="ge_rem_real" value='0'>
                    <button type="submit" class="btn" id="signin_btn" data-loading-text="<i class='icon-repeat'></i>"><i class='icon-lock'></i> &nbsp; Sign In</button>
                    <br/>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="1" id="ge_remember_me"  name="ge_remember_me"> Remember me&nbsp;&nbsp;
                    </label>
                    <a href="forgot.php" class="pull-left">forgot password</a>&nbsp;&nbsp;
    
                    <span class="label  " id="ge_login_msgbox"></span>
                </form>
                
                
                
                <blockquote>
                    
                    
                    <p>Activate your account</p>
                    <small> <?php echo $dataArray['Msg']; ?></small>
                </blockquote>
                <form class="form-signin clearfix <?php echo $dataArray['hideshow']; ?>"  id="ge_activate_form"  name="ge_activate_form">
  
                    <input type="text" placeholder="Code Part A" id="ge_parta"  name="ge_parta">
                    <input type="text" placeholder="Code Part B" id="ge_partb"  name="ge_partb">
                  
                    <button type="submit"class="btn" id="activate_btn" data-loading-text="<i class='icon-repeat'></i>"><i class='icon-check'></i> &nbsp; Activate</button>
                    <br/>
                    <span class="label" id="ge_activate_msgbox"></span>
                  
                </form>
                
      
            </div>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ubf_js.1.3.js"></script>
        
        <script>
                $( document ).ready(function() {
               
                    onDocReady();
                    
                    
                    
                    
                    
                });
        </script>
    </body>
</html>