<!DOCTYPE html>
<html lang="en-us">
<head>

<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SURABHI CINIMAS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

 <link rel="stylesheet" href="<?php echo base_url();?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/main.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/jquery.steps.css">
        <script src="<?php echo base_url();?>lib/modernizr-2.6.2.min.js"></script>
        <script src="<?php echo base_url();?>lib/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url();?>lib/jquery.cookie-1.3.1.js"></script>
        <script src="<?php echo base_url();?>build/jquery.steps.js"></script>


<style type="text/css">
  h1 {
    color: green;
}
</style>

<?php echo $nav ?>
<form name="booking">

<div class="content">
            <h1>Book Here</h1>

            <script>
                $(function ()
                {
                    $("#wizard").steps({
                        headerTag: "h2",
                        bodyTag: "section",
                        transitionEffect: "slideLeft"
                    });
                });
            </script>
  

            <div id="wizard">
                <h2>Seat selection</h2>
                <section>
                    <ul style="list-style: none;">
  <li>
  Reserved
    <img src="<?php echo base_url();?>images/ys3.png"><//li>
  <li>
  Available
  <img src="<?php echo base_url();?>images/av3.png"></a>
  </li>
  <li>
  Selected
   <img src="<?php echo base_url();?>images/uav3.png"></a>   
  </li>
</ul>
<br>

                         
                         <?php foreach($r as $key => $s){ 

                          $var=$s['Status'];
                          //echo $var;exit();
                        
                         if($var=="Success")
                         {


                          ?>
                          <label style="display: inline-block;vertical-align: top;margin-right: 7px;font-size: 13px">
                           <input style="visibility: hidden;" type="checkbox"   id="chk" name="a1[]"   value="<?php echo $s['S_id'];?>"><?php echo $s['Seat_Name']; ?>
                          <img id="st" class="set" src="<?php echo base_url();?>images/ys3.png" required="required"></label>
                         <?Php } 
                          else{ 


                            ?>
                            <label style="display: inline-block;vertical-align: top;margin-right: 7px;font-size: 13px" >
                         <input  type="checkbox"  id="chk" name="a1[]"  value="<?php echo $s['S_id'];?>"><?php echo $s['Seat_Name']; ?>
                        <img id= "st" class="set" src="<?php echo base_url();?>images/av3.png" required="required">
                        </label>
                        <?php }?>
                        
                         <?php } ?>
 <?php   
  foreach ($rc as $row)  
    { ?> 
    <input type="hidden" id="r_cost" value="<?= $row->Ticket_cost;?>">
    <?Php }  ?>
    <div>
<h3>Your Selection</h3>
<br>
 <?php   
  foreach ($b as $key => $row)  
    { ?> 
        
                        
<b>Movie Name(Language)</b>:<?php echo $row->Movie;?>
<br>
<b>Show date</b>:<?php echo $row->Sdate;?>
<?Php }  ?>
<br>
<div class="col-md-3 col-sm-6 col-xs-12 form-group">
                        <label><b>Show Time *</b></label>
                        <select name="stime" id="movie" class="required">
                        <option value="">Please select time</option>
                        <?php foreach($m as $row){ ?>
                        <option value="<?php echo $row->T_Id;?> "><?php echo $row->S_time;?></option>
                         <?php } ?>
                         </select>
                         </div>
<br>
<b>
Seats:</b>
 <input type="text" name="qty" id="count" style="border:none;" readonly />
<!-- <p id="count"></p> -->
<br>
<b>
Grant total:</b>
<input type="text" name="gtotal" id="gt" style="border:none;width:20%;" readonly />
<br>
<br>
<script type="text/javascript">
$('.set').click(function(){

  var img1 = "<?php echo base_url();?>images/av3.png";
   img2 = "<?php echo base_url();?>images/uav3.png";
   src = $(this).attr('src');
   img = (src === img1)? img2 : img1;
   $(this).attr('src',img);
});
  //var count=$('[name="a1[]"]:checked').lengt;
    
      //count++;
    //do something
    $("input:checkbox").change(function () {
    //$('#count').text($("input:checkbox:checked").length);
     var count=$("input:checkbox:checked").length;
     //alert(count);exit(); 
    $(document).find('#count').val(count);
    var qty = $('#count').val();
    var rcost=$('#r_cost').val();
     var tcost=qty*rcost;
    $(document).find('#gt').val(tcost);
 });   

</script>
</section>

                <h2>Login Here</h2>
                <section>
                   <div>
                     <label>Email:</label>
                       <input type="email" class="span11" name="uname" id="uname" placeholder="Enter Email" required>
                      
                      </div>
                      <div class="row">
                       <label>Password</label>
                     <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
                       
                       </div>
                       
                </section>

                <h2>Payement</h2>
                <section>
                    <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo, 
                        pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat. 
                        Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris 
                        venenatis.</p>
                </section>

                
            </div>

</form>
</body>
</html>