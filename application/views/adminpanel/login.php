<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Surabhi cinimas </title>
     <link href="<?php echo base_url();?>images/fav.png" rel="shortcut icon">

    <!-- Bootstrap -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

    <link href="<?php echo base_url(); ?>css/bootstrap/bootstrap-theme.min.css" rel="stylesheet">
    
    <link href="<?php echo base_url(); ?>css/bootstrap/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    
<link href="<?php echo base_url();?>css/login-style.css" rel="stylesheet" type="text/css" media="all" />
<script type='text/javascript' src='<?php echo base_url(); ?>js/jquery.particleground.js'></script>
  <script type='text/javascript' src='<?php echo base_url(); ?>js/demo.js'></script>
  <style>
  html, body {
  width: 100%;
  height: 100%;
  overflow: hidden;
} 
input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px white inset;
}


body {
  background: rgba(41, 223, 121, 0.97);
  color: #fff;
  line-height: 1.3;
  -webkit-font-smoothing: antialiased;
}
#particles {
  width: 100%;
  height: 100%;
  overflow: hidden;
}

#intro {
  position: absolute;
  left: 0;
  top: 50%;
  padding: 0 20px;
  width: 100%;
  text-align: center;
}



@media only screen and (max-width: 568px) {
  #intro {
    padding: 0 10px;
  }
}

</style>
<link href="<?php echo base_url();?>assets/jqui/jq_jquery-ui.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/jqui/jquery-ui.js"  type="text/javascript" charset="utf-8"></script>
</head>
<body>

<!--<div id="particles">!-->
 <div id="intro">
<div class="wrap">
<!-- strat-contact-form -->	
<div class="contact-form">



<!-- start-form -->
	<form class="contact_form" action="<?php echo base_url();?>index.php/login_controller/user_login_process" method="post" name="contact_form">
		<h1>Login Into Your Account</h1>
	    <ul>
	        <li>
	            <input type="text" class="textbox1" name="uname" placeholder="username" required="required" />
	        
	             <!-- <p><img src="<?php echo base_url();?>images/contact.png" alt=""></p> -->
	        </li>
	        <li>
	            <input type="password" name="psw" class="textbox2" placeholder="password" required="required" >
            <!-- <p><img src="<?php echo base_url(); ?>images/lock.png" alt=""></p> -->
	        </li>
         </ul>
       	 	<input type="submit" name="Sign In" value="Sign In"/>
			<div class="clear"></div>	
			<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember me</label>
		<div class="forgot">
			<a href="#">forgot password?</a>
		</div>	
		<div class="clear"></div>	
	</form>
    
    
<div class="account">
	<h2 class="tpmr30" style="color:#1C550A;"><b>Welcome to </b></h2>
    <h1 class="tpmr30" style="color:#1C550A;"><b>SURABHI CINIMAS</b></h1>
  <img class="tpmr30" src="<?php echo base_url(); ?>images/logo33.JPG" alt="">
  
</div>

<!-- end-form -->
<!-- start-account -->
	
<!-- end-account -->
<div class="clear"></div>	
</div>
<!-- end-contact-form -->
</div></div>
</div>
</body>
</html>