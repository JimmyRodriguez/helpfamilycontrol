<?php
/*
    (c) copyright 2011 nadlabs.co.uk. All rights reserved.
    
    
    
    http://www.nadlabs.co.uk/licence.php

*/

require_once("local_config.php");
require_once(APP_INC_PATH."bootstrap_frontend.php");



//(collect referring data, block site access, test to see if user logged in, usergroups )
sessionsClass::site_protection(true,true,true,false);
$userid = dbase::globalMagic($_SESSION['userid']);

//upload images - this is for script + no script
$upload_error='';
if (isset($_FILES["files"])){

   $upload_error = User::upload_file($_FILES,$ext_allowed);
}


$data = Admin::get_user($userid,false,'profile',true);


/*
  
    depending on your user group set up (ie if you have multiple paid groups) you will also need to
    check which group gets what access.
    
    This is code for checking for access:

*/
$preimum_access = false;
if ($data !== false){
    
    
    // this is the code needed to protect preimum content/pages
    
    if($data['paid']==1 && $data['needrenew']==0){
        //okay show premium content as user has paid and membership is not up for renewal
        $preimum_access = true;
    }
    
    // thats it.
    
    
    
    
    if ($data['img_flag']==0){
        //check for gravatr
      
        $img_url = general::get_gravatar($data['email']);
    }
    else{
        //use stored value
    
        $img_url = $data['img_url'];
    }
    $username = dbase::globalMagic($data['username']);
    $currency = CUR_SYM;
    //create the 
    if($data['paid']==1){
      //
      if($data['needrenew']==1){
         $ipad               = dbase::globalMagic($_SERVER['REMOTE_ADDR']);
         $_SESSION['renew_check'] = md5($username.$userid.$data['fee'].$data['usergroup'].$ipad);
         $_SESSION['renew_group'] = $data['usergroup'];
         $_SESSION['renew_fee'] = $renew_fee = general::globalGetOnePieceOfData('fee','user_groups','groupid='.$data['usergroup']);
        
         $form_renew = "
                  <form method='post' action='renew.php' name='renew'>
                  <input type='hidden' value='".$data['usergroup']."' id='renew_group' name='renew_group'/>
        
                  <input type='hidden' value='".$data['fee']."' id='renew_fee' name='renew_fee'/>
                  <a href='javascript:void(0)' onclick='document.renew.submit(); return false'>
                     renew your membership($currency $renew_fee)?
                  </a>
                  
                  </form>
         ";
      }
    }
    else{
      //offer upgrades
      $ipad               = dbase::globalMagic($_SERVER['REMOTE_ADDR']);
      $_SESSION['upgrade_fee'] = $upgrade_fee = general::globalGetOnePieceOfData('fee','user_groups','groupid=2271');
      $_SESSION['upgrade_check'] = md5($username.$userid.$upgrade_fee.$ipad.'2271');
      $_SESSION['upgrade_group'] = 2271;
      $_SESSION['upgrade_groupname'] = 'premium';

      $form_upgrade = "
               <form method='post' action='upgrading.php' name='upgrade'>
               <input type='hidden' value='2271' id='upgrade_group' name='upgrade_group'/>
               <input type='hidden' value='premimum' id='upgrade_groupname' name='upgrade_groupname'/>
               <input type='hidden' value='$upgrade_fee' id='upgrade_fee' name='upgrade_fee'/>
               <a href='javascript:void(0)' onclick='document.upgrade.submit(); return false'>
                  why not upgrade ($currency $upgrade_fee)?
               </a>
               
               </form>
      ";
    }
    
    
    
    
   
}
else{
    $output = 'user data not found';
}


$openidtest = explode('_',$username);

$openidflag = false;
$no_options = 'hide';
if($_SESSION['logintype']!='userbase'){
    if (count($openidtest)==2 ){
        if (is_numeric($openidtest[1]) && $openidtest[0]=='guest' ){
            $openidflag=true;
            $hideOpenId = '';
            $hideRegularUser = 'hide';
            
         
        }
        else{
     
                $hideOpenId = 'hide';
                $hideRegularUser = 'hide';
                $no_options = '';
            
            
        }
    }
    else{
            
            
                //hide everything
                $hideOpenId = 'hide';
                $hideRegularUser = 'hide';
                $no_options = '';
            
    
    }
}
else{
    $hideOpenId = 'hide';
    $hideRegularUser = '';

}




?>

<!DOCTYPE html>
<html>
    <head>
        <title>userBase 1.3 - user area - the bootstrap reboot!</title>
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
            #user-img{
                width: 100px;
                height: 100px;
                padding: 5px;
                border: solid 1px #fff;
                border-radius:5px;
                margin-right: 10px;
            }
        </style>
        
    </head>
    <body>
            
            <div class="container">
                <div class="navbar clearfix">
                        <div class="btn-group pull-left ">
                            <a href="logout.php" class="btn">logout</a>
                  
                           
                        </div>
                </div>
                
                
                <blockquote>
                    <p>Welcome to the userBase 1.3 user area.
                    
                    </p>
                    
                    <small>Here you can access all the functionality of a user who has logged into their user area.</small>
                </blockquote>
                
                
                
                
                    
                <div class=" well">
                    <a class="pull-left" href="#">
                    <img id="user-img"  src="<?php echo $img_url;?>">
                    </a>
                     <div class="media-body">
                        <h4 class="media-heading"><?php echo $username;?></h4>
                        <?php echo ($data['paid']==1)?'premium membership':'normal membership '.$form_upgrade;?>
                        <?php echo ($data['paid']==1)?'<br/>renewal date: '.$data['renew_date']:'joined on: '.$data['date_joined'];?><br/>
             
                        <?php echo ($data['paid']==1 && $data['needrenew'])?'time to renew your membership:'.$form_renew:'';?>
                     </div>
                     
                     
                     
                </div>
                <?php if($preimum_access){?>
                    <div class=" well">
                        <h2>Premimum Content</h2>
                        <blockquote>
                    
                            <small>This can also be used to protect whole pages</small>
                        </blockquote>
                    </div>
                <?php }else{ ?>
                
                    <div class=" well">
                        <h2>Normal Content</h2>
                        <blockquote>
                    
                            <small>Your need paid access to get premium content</small>
                        </blockquote>
                    </div>
                <?php }?>
                <div class="<?php echo $hideOpenId; ?>">
                        <blockquote>
                        
                            <small>Change your screen name - social media users only - can only be used once</small>
                        </blockquote>
                        <form class="form-signin clearfix" id="ed_change_username_form"  name="ed_change_username_form">
                        
                       
                            <input type="text" class="pull-left" placeholder="Your New Email Address" id="ed_username"  name="ed_username">
                            <div class="alert alert-block "><span id="ed_username_errmsg"></span></div>
                            <div class='clearfix'></div>
                      
                      
                            <button type="submit" class="btn" id="change_username_btn" data-loading-text="<i class='icon-repeat'></i>"><i class='icon-ok'></i> &nbsp; Update Screen Name</button>
                            <br/>
                            <span class="label  " id="ed_change_username_msgbox"></span>
                      
                    </form>
                </div>
                <div class="<?php echo $hideRegularUser;?>">
                        <blockquote>
                            
                            <small>Change your email address - will require re-activation</small>
                        </blockquote>
                        <form class="form-signin clearfix" id="ed_change_email_form"  name="ed_change_email_form">
                            
                            <input type="password" class="pull-left" placeholder="Your Current Password" id="ed_current_password"  name="ed_current_password">
                            <div class="alert alert-block "><span id="ed_current_password_errmsg"></span></div>
                            <div class='clearfix'></div>
                            
                            <input type="text"  class="pull-left" placeholder="Your New Email Address" id="ed_new_email"  name="ed_new_email">
                            <div class="alert alert-block "><span id="ed_username_email_errmsg"></span></div>
                            <div class='clearfix'></div>
                          
                          
                            <button type="submit" class="btn" id="update_email_btn" data-loading-text="<i class='icon-repeat'></i>"><i class='icon-ok'></i> &nbsp; Update Email Address</button>
                            <br/>
                            <span class="label  " id="ed_change_email_msgbox"></span>
                          
                        </form>
                        <blockquote>
                            
                            <small>Change your password</small>
                        </blockquote>
                        <form class="form-signin clearfix" id="ed_change_password_form"  name="ed_change_password_form">
                            
                            <input type="password" class="pull-left" placeholder="Your Current Password" id="ed_current_password"  name="ed_current_password">
                            <div class="alert alert-block "><span id="ed_current_password_errmsg"></span></div>
                            <div class='clearfix'></div>
                          
                            <input type="password"  placeholder="Your New Password" id="ed_new_password"  name="ed_new_password"><br/>
                          
                            <input type="password"  class="pull-left" placeholder="Confirm Your Password" id="ed_new_confirm_password"  name="ed_new_confirm_password">
                            <div class="alert alert-block "><span id="ed_new_confirm_password_errmsg"></span></div>
                            <div class='clearfix'></div>
                          
                          
                          
                            <button type="submit" class="btn" id="update_password_btn" data-loading-text="<i class='icon-repeat'></i>"><i class='icon-ok'></i> &nbsp; Change Your Password</button>
                            <br/>
                            <span class="label  " id="ed_change_password_msgbox"></span>
                          
                        </form>
                </div>
                <blockquote>
                    
                    <small>Allow the user to hot link their avatar image</small>
                </blockquote>
                <form class="form-signin clearfix" id="ed_update_avatar_hotlink_form"  name="ed_update_avatar_hotlink_form">
                    
                    <input type="text" placeholder="Image URL" id="ed_avatar_link"  name="ed_avatar_link">
                    <div class="alert alert-block "><span id="ed_avatar_link_errmsg"></span></div>
                    <div class='clearfix'></div>
                  
                  
                    <button type="submit" class="btn" id="update_avatar_hotlink_btn" data-loading-text="<i class='icon-repeat'></i>"><i class='icon-ok'></i> &nbsp; Hotlink You Avatar</button>
                    <br/>
                    <span class="label  " id="ed_update_avatar_hotlink_msgbox"></span>
                  
                </form>
                
                <blockquote>
                    
                    <small>Allow the user to upload their avatar image</small>
                </blockquote>
                <form class="form-signin clearfix" id="ge_update_avatar_upload_form"  name="ge_update_avatar_upload_form" action="userarea.php" method="post" enctype="multipart/form-data">
                    
                    
                    
               
                     
                    
                        
                    
                    
                    
                    <div style="position:relative;">
                            <a class='btn' href='javascript:;'>
                                Choose File...
                                <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="files" id="files" size="40"  onchange='$("#upload-file-info").html($(this).val());$("#upload-btn").show(1);'>
                            </a>
                            
                            &nbsp;
                            <span class='label label-info' id="upload-file-info"></span>
                    </div>
                    <button class='btn hide'  id ='upload-btn' type='submit'>upload</button>
                     <div class="alert alert-block "><span id="ed_avatar_upload_errmsg"><?php echo $upload_error;?></span></div>
                      <div class='clearfix'></div>
                    <br/>
                    <span class="label  " id="ge_update_avatar_upload_msgbox"></span>
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