<html>
<head>
<title>SURABHI CINIMAS</title>
  <link href="<?php echo base_url();?>/images/fav.png" rel="shortcut icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
form {
    border: 0px solid #f1f1f1;

}

input[type=text], input[type=password] {
    width: 400px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color:#FD4516;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width:400px;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}


.container {
     width:400px;
    padding: 16px;
    margin-left:400px;
}

span.psw {
    float: right;
    padding-top:16px;
}

/* Change styles for span and cancel button on extra small screens */

</style>
</head>
<?php echo $nav ?>
<br>
<br>
<br>
<h2 style="margin-left:550px;color: #FD4516">Sign Up</h2>
<form action="<?php echo base_url();?>/index.php/user_controller/signup" method="post">
                     <div class="container">
                    
                     <div class="row">
                     <div class="col-md-12"> <label>First Name</label>
                      <input type="text" class="form-control" name="fname" id="fname" required="required" pattern="[a-zA-Z][a-zA-Z ]{1,}"  title="All should be characters" placeholder="Enter first name">
                      </div>
                      </div>
                      <div class="row">
                       <div class="col-md-12"><label>Last Name</label>
                      <input type="text" class="form-control" name="lname" id="lname" required="required" pattern="[a-zA-Z][a-zA-Z ]{1,}"  title="All should be characters" placeholder="Enter last name">
                       </div>
                       </div>
                       <div class="row">
                      <div class="col-md-12"> <label>Email Address</label>
                      <input type="email" class="form-control" name="email" id="email" required="required" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid email">
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-12"><label>Phone number</label>
                      <input type="text" class="form-control" name="ph" id="ph"  placeholder="Enter Phone number" required="required" pattern="[0-9]{10,13}" title="please enter a valid phone number">
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-12"><label>Password</label>
                      <input type="password" class="form-control" name="pwd" data-validate-length-range="6" data-validate-words="2"  placeholder="Enter password" id="pwd" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                      </div>
                      </div>
                      <div class="row">
                       <div class="col-md-12"> <label>Confirm Password</label>
                      <input type="password" class="form-control" name="cpwd" id="cpwd"  placeholder="Enter confirm Password" required="required">
                      </div>
                      </div>
                      <div class="row">
                      <div style="margin-top: 15px;">
                       <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <button type="submit">Sign up</button>
                         <!-- <p class="pull-right modal-title" style="float:left;text-align: right;">Not a member ?<span>  <a href="<?php //echo base_url();?>/index.php/user_controller/user_login">Signup</a></span> -->
                        </a></p>

                     <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->

                        </div>
                        </div>
                </div>
                </div>
                </form>


</body>
</html>