<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="<?php echo base_url();?>js/jquery.noty.packaged.min.js" type="text/javascript" charset="utf-8"></script>
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
    width: 150px;
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
<?php echo $nav1 ?>
<br>
<br>
<h2 style="margin-left:550px;color: #FD4516">Update Profile</h2>
<form action="<?php echo base_url();?>/index.php/user_controller/upadate_signup/" method="post">
                     <div class="container">
                    
                     <div class="row">
                     <?php 
                     foreach($p as $row)
                     {?>
                     <div class="col-md-12"> <label>First Name</label>
                      <input type="text" class="form-control" name="fname" id="fname" required="required" value="<?php echo $row->FName;?>" pattern="[a-zA-Z][a-zA-Z ]{1,}"  title="All should be characters" placeholder="Enter first name">
                      </div>
                      </div>
                      <div class="row">
                       <div class="col-md-12"><label>Last Name</label>
                      <input type="text" class="form-control" name="lname" value="<?php echo  $row->LName;?>" id="lname" required="required" pattern="[a-zA-Z][a-zA-Z ]{1,}"  title="All should be characters" placeholder="Enter last name">
                       </div>
                       </div>
                       <div class="row">
                      <div class="col-md-12"> <label>Email Address</label>
                      <input type="email" class="form-control" name="email" id="email" value="<?php echo $row->Email;?>" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid email" placeholder="Enter email">
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-12"><label>Phone number</label>
                      <input type="text" class="form-control" name="ph" value="<?php echo $row->Mobile_no;?>" id="ph"  placeholder="Enter Phone number" required="required" pattern="[0-9]{10}" title="please enter a valid phone number">
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-12"><label>Password</label>
                      <input type="password" class="form-control" name="pwd"  placeholder="Enter password" id="pwd" value="<?php echo $row->Password;?>" required="required"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                      </div>
                      </div>
                      <div class="row">
                       <div class="col-md-12"> <label>Confirm Password</label>
                      <input type="password" class="form-control" name="cpwd" id="cpwd"  placeholder="Enter confirm Password" value="<?php echo $row->Confirm_password;?>" required="required">
                      
                      </div>
                      </div>
                      <div class="row">
                      <div style="margin-top: 15px;">
                       <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        
                        <input name="btnupdate" type="submit" id="btnupdate" value="Update" class="button update" style="width: 150px" />
                        <input name="btncancel" type="submit" id="btncancel" value="Cancel" class="button cancel" style="width: 150px" />
                         <!-- <p class="pull-right modal-title" style="float:left;text-align: right;">Not a member ?<span>  <a href="<?php //echo base_url();?>/index.php/user_controller/user_login">Signup</a></span> -->
                        </a></p>
                        <input type="hidden"  name="id" value="<?php echo $row->Id; ?>">
<?php } ?>
                     <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->

                        </div>
                        </div>
                </div>
                </div>
                </form>
     <?php           
  if(isset($_GET['success'])){
?>
  <script>  
    noty({text:"Successfully Updated",type: 'success',layout: 'top', timeout: 3000});
  </script>
<?php
  }
?>
<script type="text/javascript">
  $(document).ready(function(){
  $('#btncancel').click(function(){
    parent.history.back();
    return false;
  });
});
</script>>

</body>
</html>