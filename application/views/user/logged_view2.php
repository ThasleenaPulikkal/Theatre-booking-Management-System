

<!DOCTYPE html>
<html lang="en-us">
<head>
<title>SURABHI CINIMAS</title>
  <link href="<?php echo base_url();?>/images/fav.png" rel="shortcut icon">
<style>
 a.b1 {
    line-height: 180%;
    height:100px; 
    padding: 2px;
    background:#E7532D ;
color: #fff;
border: 1px solid #cd9700;
    text-decoration: none;
    width:200px;     /* no underline */
}
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <?php echo $nav1 ?>
  <br>
  <br>
  <br>
  <br>
  <h4 style="color: blue">You are logged in as <?Php echo $email;?></h4>
  
  
  <br>
   <div class="" style="display: inline-block;vertical-align: top;font-size: 20px;">
  <a  id="stime" class="b1" href="<?php echo base_url();?>/index.php/user_controller/index" data-toggle="tooltip" title="please select movie time" value="" required="required" >
  Logout</a>
   <?php
                  foreach ($id as  $row)  
                  { ?>
                 
                   
  <a  id="stime" class="b1" href="<?php echo base_url();?>/index.php/user_controller/update/<?php echo $row->Id; ?>" data-toggle="tooltip" title="please select movie time" value="" required="required" >
  Update profile</a> 
 <?php }?>
  <a  id="stime" class="b1" href="<?php echo base_url();?>/index.php/user_controller/cancel_ticket/<?Php echo $row->Id;?>" data-toggle="tooltip" title="please select movie time" value="" required="required" >
  Cancel Ticket</a>
  <a  id="stime" class="b1" href="<?php echo base_url();?>/index.php/user_controller/printticket" data-toggle="tooltip" title="please select movie time" value="" required="required" >
  Print Ticket</a>
  </div>
</body>
</html>