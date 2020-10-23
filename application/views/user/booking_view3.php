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
  .buttoncontinue {
    background-color:#E7532D;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    width: 278px;
}
  </style>
</head>
<?php echo $nav ?>
<br>
<br>
<div style="text-align:center;">
<h3>Reservation Details<small></small></h3>
              <table border="1" align="center">
                 
              <?php
                    foreach ($proceed as $key => $row)  
                  { ?> 
                      <?php if($key==0){?>
                                <tr>
                                <td><b>Movie:</b></td><td><?php echo $row->Movie;?></td></tr>
                                <input type="hidden"  name="bid" value="<?php echo $row->B_Id;?>">
                                <tr><td>
                                <b> Language:</b></td><td><?php echo $row->Language;?></td></tr> 
                                <tr>
                                <td>                     
                                <b>Show time:</b></td><td><?php echo $row->S_time;?></td></tr>
                                 <tr><td><b>Show date:</b></td><td><?php echo $row->Reservation_date;?></td></tr>
                                 <tr><td><b>Totel cost:</b></td><td><?php echo $row->Ticket_cost;?></td></tr>
                                 <tr><td>

                                <b> Seat No:</b></td><td>
                         <?php }?>
                        
                          <b><?php echo $row->Seat_Name;?></b>
                            <?php }?>
                            
                          
                         
                         </td></tr></table>
                         <button data-toggle="modal" data-target="#myModal3" id="tkt_submit" type="button" name="submit" class=".buttoncontinue">
                            Confirm</button>
                            </div>

                  
                   <div id="myModal3" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
              <h4>Sign in</h4>

               
           <!-- <div type="button" class="btn" data-toggle="popover" data-placement="right" title="" data-content="You can add a new category of Service here" data-original-title=""><i class="fa fa-info-circle" aria-hidden="true"></i></div>-->
           
            </div>
            <div class="modal-body">
            
                 <form action="<?php echo base_url();?>/index.php/user_controller/loginuser" method="post">
                 <div class= "form-group">
                 <?php
                                     foreach ($proceed as  $row)  
                  { ?>
                 <input type="hidden"  name="bid" value="<?php echo $row->B_Id; ?>" >
                   <?php }?>
                     <div class="modal-body div_salary_table">
                    </div>
                     
                   <div class="row">
                     <div class="col-md-6"> 
                      <input type="email" class="form-control" name="uname" id="uname" placeholder="Enter Email" required>
                      </div>
                      </div>
                     <br>
                <div class="row">
                     <div class="col-md-6"> 
              <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
              </div></div>
    
   
    <div style="display:inline">
    <!-- <input type="checkbox" checked="checked"> Remember me -->
      <!-- <a href="#" style="margin-left:250px;">Forgot password?</a> -->
      </div>
  </div>

 <!-- <div style="display:inline;float:left;padding-left:5px">
   Don't have an account? <a href="<?php //echo base_url();?>/index.php/user_controller/index">Sign up</a>!-->
 
   <div class="row">
                      <div style="margin-top: 15px;" class="modal-footer">
                       <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <input type="submit" class="btn btn-primary antosubmit " style="float: left;" value="Sign in">
                         <p class="pull-right modal-title" style="float:left;text-align: right;">Not a member ?<span>  <a href="<?php echo base_url();?>/index.php/user_controller/user_login">Signup</a></span>
                        </a></p>

                     <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->

                        </div>
                        </div>
                </div>
</form>
        </div>
    </div>
    </div>
    </div>
   

                   </body>