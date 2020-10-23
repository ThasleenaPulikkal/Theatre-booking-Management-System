<html lang="en">
<head>
  <title>SURABHI CINIMAS</title>
  <link href="<?php echo base_url();?>/images/fav.png" rel="shortcut icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .tp50
  {
  margin-top: 50px;
}
.form-module {
position: relative;
background: #ffffff;
max-width: 400px;
width: 100%;
border-top: 5px solid #3e254a;
box-shadow: 0 0 3px rgba(0, 0, 0, 0.25);
margin: 1em auto;
}
.form-module .cta {
background: #654076;
width: 100%;
padding: 15px 40px;
box-sizing: border-box;
color: #fff;
text-align: center;
margin-top: 20px;
}


.form-module input[type="submit"] {
background: #b13422;
width: 100%;
border: 0;
padding: 10px 15px;
color: #ffffff;
-webkit-transition: 0.3s ease;
transition: 0.3s ease;
font-size: 1em;
font-weight: bold;
text-transform: uppercase;
outline: none;
}
  </style>
</head>
<?php echo $nav ?>

<div class="container tp50" style="padding-bottom:10px;">

 <h1 class="md-moviename">Contact Details</h1>

    <div class="div tp_mar10">
<div class="col-md-7 post">

         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125215.17145533474!2d75.74231031174875!3d11.263313486936735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65070bd2d85e1%3A0xe3afd93195607fb5!2sSurabhi+CINEMA!5e0!3m2!1sen!2sin!4v1503893039759" width="1000" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
          
           <div class="tp_mar10">

                <div class="locatn2 tp_mar30"><strong>Surabhi Shopping Mall</strong><br>

                   Ramanatukara<br>

                    Kozhikode(Dt),Kerala,<br>

                </div>

                <div class="ph2 tp_mar10">
                
                 Phone : 7510939495
                </div>

                <div class="mail2 tp_mar10">
                    Email : surabhicinema@gmail.com <br>

                </div>


            </div>
            
        </div>
        <div class="col-md-5 post">

          <div class="module form-module" style="margin:0;">
                              
                            
                              
                              <div class="form">
                                <h3>Enquiry Form</h3>
                                <form action="<?php echo base_url();?>index.php/user_controller/contact_us" method="post">
                                  <input type="text" name="name" placeholder="Name" required pattern="[a-zA-Z][a-zA-Z ]{1,}"  title="All should be characters" placeholder="Enter first name">
                                  <input type="text" maxlength="10" name="mobile" placeholder="Mobile No." required attern="[0-9]{10}" title="please enter a valid phone number">
                                  <input type="email" name="email" placeholder="Email Address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid email" >
                                 <textarea class="form-control" rows="5" id="message" name="message" required="" placeholder="Message"></textarea>
                                  
                                
                              </div>
                             <div class="cta"><input type="submit" name="sub" id="sub" value="submit"></div>
                              </form>
                            </div>

           </div>

<div class="clear"></div>
</div>
</div>
</div>
<?php echo $footer;?>
</body>
</html>