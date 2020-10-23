<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Greeenindia </title>
     <link href="<?php echo base_url(); ?>images/fav.png" rel="shortcut icon">

    <!-- Bootstrap -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

    <link href="<?php echo base_url();?>css/bootstrap/bootstrap-theme.min.css" rel="stylesheet">
    
    <link href="<?php echo base_url();?>css/bootstrap/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    
<link href="<?php echo base_url();?>css/login-style.css" rel="stylesheet" type="text/css" media="all" />
 <script src="<?php echo base_url();?>js/jquery-1.11.3.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.particleground.js"></script>
  <script type='text/javascript' src="<?php echo base_url();?>js/demo.js"></script>
  
  <script src=" <?php echo base_url();?>js/bootstrap/bootstrap.min.js"></script>
  
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
  background: #14283a;
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
-


@media only screen and (max-width: 568px) {
  #intro {
    padding: 0 10px;
  }
}

</style>
</head>
<body>

<div id="particles">
  <div id="intro">
<div class="wrap">
<!-- strat-contact-form -->	
<div class="contact-form">



<!-- start-form -->
	<form class="contact_form" action="#" method="post" name="contact_form">
		<h1>Login Into Your Account</h1>
	    <ul>
	        <li>
	            <input type="email" class="textbox1" name="email" placeholder="info@w3layouts.com" required />
	            <span class="form_hint">Enter a valid email</span>
	             <p><img src="<?php echo base_url(); ?>images/contact.png" alt=""></p>
	        </li>
	        <li>
	            <input type="password" name="website" class="textbox2" placeholder="password">
	            <p><img src="<?php echo base_url(); ?>images/lock.png" alt=""></p>
	        </li>
         </ul>
       	 	<input type="submit" name="Sign In" value="Sign In"/>
			<div class="clear"></div>	
			<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember me</label>
		<div class="forgot">
		
            <a href="" type="button" class="" data-toggle="modal" data-target="#forgortpasswrd">forgot password?</a>


		</div>	
		<div class="clear"></div>	
	</form>
    
    
<div class="account">
	<h2 class="tpmr30">Welcom to </h2>
  <img class="tpmr30" src="<?php echo base_url(); ?>images/logo.png">
  <p>Lorem Ipsum is also known as: Greeked text, blind text, placeholder text, dummy content, filler text, lipsum, and mock-content.
Samuel L Ipsum: Lo</p>
  
</div>

<!-- end-form -->
<!-- start-account -->
	
<!-- end-account -->
<div class="clear"></div>	
</div>
<!-- end-contact-form -->
</div></div>
</div>

<!--=================================================== forgot password popup ==================================================-->

<div id="forgortpasswrd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="max-width:650px;margin:auto">
      <div class="modal-header">
       
      </div>
      <div class="modal-body">
         <form class="form-label-left" novalidate>
<div class="item form-group">
                       
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12 bodrnone" data-validate-length-range="6" data-validate-words="2" name="name" value="sumesh" required type="text">
                        </div> </div>
                     
                      <div class="item form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <button id="send" type="submit" class="btn btn-primary">  Submit</button>
                        </div>
                         </div>
                    </form>
      </div>
     
    </div>

  </div>
</div>


<!--=================================================== forgot password popup ==================================================-->

</body>
</html>