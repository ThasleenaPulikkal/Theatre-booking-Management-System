<!DOCTYPE html>
<html lang="en-us">
<head>
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
<title>SURABHI CINIMAS</title>
  <link href="<?php echo base_url();?>/images/fav.png" rel="shortcut icon">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <?php echo $nav1 ?>
  <br>
  <br>
  <br>
  <br>
  <b><h4 style="color: black;margin-left:480px; ">Ticket Cancelation Detailes</h4></b>

  <form action="<?php echo base_url();?>/index.php/user_controller/cancel_ticket1" method="post">
  <input type="hidden" name="id" value="<?php echo $Id;?>">
 
  
  <div style="margin-left:480px;">
  Booking id:<br>
  <input type="text" name="bid" placeholder="Enter booking id" required pattern="[0-9]{1,}" title="please enter a number">
  <br>
  Seat No:<br>
  <input type="text" name="seat_no" placeholsder="Enter seat no" required>
   
  <br><br>
  <input type="submit" value="Submit">
   <input type="submit"  value="Cancel">
  </div>
</form>
  </body>
  </html>