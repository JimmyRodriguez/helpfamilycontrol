<?php
require_once("local_config.php");
require_once(APP_INC_PATH."bootstrap_frontend.php");


sessionsClass::site_protection(true,true,false,false);


?>
<!DOCTYPE html>
<html>
    <head>
	<title>OpenID </title>

	<link type="text/css" rel="stylesheet" href="css/openid.css" />
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	    
	    
	<script src="http://code.jquery.com/jquery.js"></script>
	<script type="text/javascript" src="js/openid-jquery.js"></script>
	<script type="text/javascript" src="js/openid-en.js"></script>
	
	
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			openid.init('openid_identifier');
			openid.setDemoMode(false); //Stops form submission for client javascript-only test purposes
		});
	</script>
	
 </head>	

<body>
 <div class="container">
    <div id="buttons">



    <form action="openlogin.php" method="post" id="openid_form">
		<input type="hidden" name="action" value="verify" />
		<fieldset>
			<legend>Sign-in or Create New Account</legend>
			<div id="openid_choice">
				<p>Please click your account provider:</p>
				<div id="openid_btns"></div>
			</div>
			<div id="openid_input_area">
				<input id="openid_identifier" name="openid_identifier" type="text" value="http://" />
				<input id="openid_submit" type="submit" value="Sign-In"/>
			</div>
			<noscript>
				<p>OpenID is service that allows you to log-on to many different websites using a single indentity.
				Find out <a href="http://openid.net/what/">more about OpenID</a> and <a href="http://openid.net/get/">how to get an OpenID enabled account</a>.</p>
			</noscript>
		</fieldset>
		
		
    </form>
    
<!--do not remove this START-->
    <div id="open_id_backup" >
		    <input id="openid_identifier" name="openid_identifier" type="text" value="http://" />
		    <input id="openid_submit" type="submit" value="Sign-In"/>
    </div>
<!--do not remove this END --> 
    
	<div class='txtl'>
	<p>
	If you do not want to use the openID selector above but want to roll your own then here are all the URLs for the above
	openID providers:
	</p>
	<h4>Those without usernames in the URL</h4>
	
	<div class="well well-small">Google: <b>https://www.google.com/accounts/o8/id</b></div>
	<div class="well well-small">Yahoo: <b>http://me.yahoo.com/</b></div>
	<h4>Those with usernames in the URL</h4>
	<div class="well well-small">AOL: <b>http://openid.aol.com/{username}</b></div>
	<div class="well well-small">MyOpenID: <b>http://{username}.myopenid.com/</b></div>
	<div class="well well-small">LiveJournal: <b>http://{username}.livejournal.com/</b></div>
	<div class="well well-small">WordPress: <b>http://{username}.wordpress.com/</b></div>
	<div class="well well-small">BlogSpot: <b>http://{username}.blogspot.com/</b></div>
	<div class="well well-small">Verisign Labs: <b>http://{username}.pip.verisignlabs.com/</b></div>
	<div class="well well-small">ClaimID: <b>http://claimid.com/{username}</b></div>
	<div class="well well-small">ClickPass: <b>http://clickpass.com/public/{username}</b></div>
	<div class="well well-small">Google Profiles: <b>http://www.google.com/profiles/{username}</b></div>
	
	
	
	
	
	<div class="well">
	    
	    <p>
		Whichever buttons you provide they must send the finished URL as a form POST to openlogin.php in a
		POST field with the ID/Name of "openid_identifier".
	    </p>
	    <p>
		You should also provide an empty input box with an ID/Name of "openid_identifier" in a form that POSTS to
		openlogin.php for people with other providers.
	    </p>
	</div>
	
	
	
	
	
	
	
	
	
	 
	<h4>Example:</h4>
	
	<form action="openlogin.php" method="post" id="openid_form_google">
	    <fieldset>
			<legend>Google Example</legend>
			<div id="openid_input_area">
				<input id="openid_identifier" name="openid_identifier" type="hidden" value="https://www.google.com/accounts/o8/id" />
	
				    <input type="image" src="./img/google.gif"  alt="sign in" border="0"  style='width:75px; height:32px; border:none; padding:0px ;'/>

			</div>
	    </fieldset>
	</form>
    
  </div>
</div>
 </div>
</body>
</html>