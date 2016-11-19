<?php
require_once("local_config.php");
require_once(APP_INC_PATH."bootstrap_frontend.php");


sessionsClass::site_protection(true,true,false,false);



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
                    Here you can access all the front end
                    user functionality such as register, login, forgot password and re-send your activation email.
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
                
                <form class="hide" id="ge_check_username_form" name="ge_check_username_form">
                    <input  type="hidden"  id="ge_username"  name="ge_username">
                    <input  type="hidden"  id="ge_source"  name="ge_source" value=0>
                </form>
                
                <form class="hide" id="ge_check_email_form" name="ge_check_email_form">
                    <input  type="hidden"  id="ge_email"  name="ge_email">
                    <input  type="hidden"  id="ge_source"  name="ge_source" value=0>
                </form>
                <blockquote>
                    
                    
                    <small>Register a user account</small>
                </blockquote>
                <form class="form-signin clearfix"  id="ad_register_form"  name="ad_register_form">
  
                  <input class="pull-left" type="text" placeholder="Username" id="ad_username"  name="ad_username">
                  <div class="alert alert-block "><span id="ad_username_errmsg"></span></div>
                  <div class='clearfix'></div>
                  <input class="pull-left" type="text" placeholder="Email Address" id="ad_email"  name="ad_email">
                  <div class="alert alert-block "><span id="ad_email_errmsg"></span></div>
                  <div class='clearfix'></div>
                  <input type="password" placeholder="Password" id="ad_password"  name="ad_password" ><br/>
                  <input  class="pull-left" type="password" placeholder="Password" id="ad_password_confirm"  name="ad_password_confirm" >
                  <div class="alert alert-block "><span id="ad_password_confirm_errmsg"></span></div>
                  <div class='clearfix'></div>
                    
                  <input type="hidden"  id="ad_contact_me_real"  name="ad_contact_me_real" value='0'>
                  <input type="hidden"  id="ad_tandc_real"  name="ad_tandc_real" value='0'>
                  <input type="hidden"  id="ad_account_type"  name="ad_account_type" value='1'>
                  <label class="checkbox pull-left" >
                    <input type="checkbox" value="1" id="ad_contact_me"  name="ad_contact_me"> yes, you can contact me
                  </label>
                  <div class="alert alert-block "><span id="ad_contact_me_errmsg"></span></div>
                  <div class='clearfix'></div>
                 
                  <label class="checkbox pull-left">
                    <input type="checkbox" value="1" id="ad_tandc"  name="ad_tandc"> yes, I agree to the&nbsp;
                  </label>
                  <a href="#" class=" pull-left">Terms & Conditions</a>&nbsp;&nbsp;
                  <div class="alert alert-block "><span id="ad_tandc_errmsg"></span></div>
                  <div class='clearfix'></div>
                  
                  <?php include(APP_INC_PATH."html/captcha.php")?>
                  
                 
                                <button type="submit"class="btn" id="register_btn" data-loading-text="<i class='icon-repeat'></i>"><i class='icon-check'></i> &nbsp; Register</button>
                    <br/>
                  <span class="label  " id="ad_register_msgbox"></span>
                </form>
                
                
                <blockquote>
                    
                    
                    <small>Register a <strong>preimum</strong> membership account</small>
                </blockquote>
                
                <form class="form-signin clearfix pull-left"  id="ad_register_p_form"  name="ad_register_p_form">
  
                  <input class="pull-left" type="text" placeholder="Username" id="ad_username"  name="ad_username">
                  <div class="alert alert-block "><span id="ad_username_errmsg"></span></div>
                  <div class='clearfix'></div>
                  <input class="pull-left" type="text" placeholder="Email Address" id="ad_email"  name="ad_email">
                  <div class="alert alert-block "><span id="ad_email_errmsg"></span></div>
                  <div class='clearfix'></div>
                  <input type="password" placeholder="Password" id="ad_password"  name="ad_password" ><br/>
                  <input  class="pull-left" type="password" placeholder="Password" id="ad_password_confirm"  name="ad_password_confirm" >
                  <div class="alert alert-block "><span id="ad_password_confirm_errmsg"></span></div>
                  <div class='clearfix'></div>
                    
                  <input type="hidden"  id="ad_contact_me_real"  name="ad_contact_me_real" value='0'>
                  <input type="hidden"  id="ad_tandc_real"  name="ad_tandc_real" value='0'>
                  <input type="hidden"  id="ad_account_type"  name="ad_account_type" value='2273'>
                  <label class="checkbox pull-left" >
                    <input type="checkbox" value="1" id="ad_contact_me"  name="ad_contact_me"> yes, you can contact me
                  </label>
                  <div class="alert alert-block "><span id="ad_contact_me_errmsg"></span></div>
                  <div class='clearfix'></div>
                 
                  <label class="checkbox pull-left">
                    <input type="checkbox" value="1" id="ad_tandc"  name="ad_tandc"> yes, I agree to the&nbsp;
                  </label>
                  <a href="#" class=" pull-left">Terms & Conditions</a>&nbsp;&nbsp;
                  <div class="alert alert-block "><span id="ad_tandc_errmsg"></span></div>
                  <div class='clearfix'></div>
                  
                  
                  
                 
                                <button type="submit"class="btn" id="register_p_btn" data-loading-text="<i class='icon-repeat'></i>"><i class='icon-check'></i> &nbsp; Register</button>
                    <br/>
                  <span class="label  " id="ad_register_p_msgbox"></span>
                </form>
                <div id="confirm_form" class="pull-left">
                    
                </div>
                <div class="clb"></div>
                
                
                <blockquote>
                    
                    
                    <small>Forgot password</small>
                </blockquote>
                
                <form class="form-signin clearfix "  id="ge_forgot_form"  name="ge_forgot_form">
  
                  <input type="text" placeholder="Username or Email" id="ge_username_email"  name="ge_username_email">
                  
                 <button type="submit"class="btn" id="remember_btn" data-loading-text="<i class='icon-repeat'></i>"><i class='icon-info-sign'></i> &nbsp; Remind Me</button>

                  <br/>
                  <span class="label  " id="ge_forgot_msgbox"></span>
                </form>
                <blockquote>
                    
                    
                    <small>Re-send activation email</small>
                </blockquote>
                <form class="form-signin clearfix"  id="ge_reactivate_form"  name="ge_reactive_form">
  
                  <input type="text" placeholder="Username or Email" id="ge_username_email"  name="ge_username_email">
                  
                 <button type="submit"class="btn" id="reactivate_btn" data-loading-text="<i class='icon-repeat'></i>"><i class='icon-envelope'></i> &nbsp; Send Activation Email</button>
                 <br/>
                  <span class="label  " id="ge_reactivate_msgbox"></span>
                  
                </form>
                <blockquote>
                    
                    
                    <small>Activate your account</small>
                </blockquote>
                <form class="form-signin clearfix"  id="ge_activate_form"  name="ge_activate_form">
  
                  <input type="text" placeholder="Code Part A" id="ge_parta"  name="ge_parta">
                  <input type="text" placeholder="Code Part B" id="ge_partb"  name="ge_partb">
                  
                    <button type="submit"class="btn" id="activate_btn" data-loading-text="<i class='icon-repeat'></i>"><i class='icon-check'></i> &nbsp; Activate</button>
                    <br/>
                    <span class="label" id="ge_activate_msgbox"></span>
                  
                </form>
                
                <blockquote>
                    
                    
                    <small>Integrated "contact us" form</small>
                </blockquote>
                <form class="form-signin clearfix"  id="ge_contact_us_form"  name="ge_contact_us_form">
  
                  <input class="pull-left" type="text" placeholder="Your Name (or username)" id="ge_username"  name="ge_username">
                    <div class="alert alert-block "><span id="ge_username_errmsg"></span></div>
                  <div class='clearfix'></div>
                  <input class="pull-left"  type="text" placeholder="Your Email" id="ge_email"  name="ge_email">
                      <div class="alert alert-block "><span id="ge_email_errmsg"></span></div>
                  <div class='clearfix'></div>
                  <textarea class="pull-left"  id='ge_msg' name='ge_msg'></textarea>
                    <div class="alert alert-block "><span id="ge_msg_errmsg"></span></div>
                  <div class='clearfix'></div>
                  
                    <button type="submit"class="btn" id="contact_btn" data-loading-text="<i class='icon-repeat'></i>"><i class='icon-envelope'></i> &nbsp; Send Message</button>
                    <br/>
                    <span class="label" id="ge_contact_msgbox"></span>
                  
                </form>
      
            </div>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ubf_js.1.3.js"></script>
        
        <script>
                $( document ).ready(function() {
                    set_ub_stats();
                    onDocReady();
                    
                    
                    
                    
                    
                });
        </script>
    </body>
</html>