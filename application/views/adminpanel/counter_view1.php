

    <?php echo $header; ?>
   
<style>
 .passmsg
 {
     color:red;
}
 .passmsg1
 {
     color:red;
 }
   .box{
  width:100px;
  height:100px;
}
.mstyle
{
  
  font-size: 20px;
}
.button bt1 {
  float: left;
    background-color: #4CAF50; /* Green */
    color: white;

    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;

}
a.button {
    line-height: 180%;
    padding: 2px;
    border : gray outset 2px ;
    text-decoration: none;     /* no underline */
}
a.button:link {
    color : #00a ;
    background-color : white ;
}
a.button:visited {
    color : #009 ;
    background-color :white ;
}
a.button:active {
    border : gray inset 2px ;
}
a.button:hover {
    color : #000 ;
    background-color : #ccc ;
}

.ButtonClicked {
    background-color: #0FA290 !important;
}
</style>
</head>
<body>
 <?php echo $nav ?>
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            </h3>
          </div>
          <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
                    
                  </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h3>Counter Ticket<small></small></h3>
                 <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="">
                <table border="0">
                <form id="moviedetails" method="post" action="<?php echo base_url();?>index.php/addmoviecontrolle/counter"  >
              <input type="hidden" name="count" id="count" >
              <input type="hidden" name="tm" id="tm" value="<?php echo $tid?>">
              <?php   
                    foreach ($m as $key => $row)  
                  { ?> 
                         <h4><b><?php echo $row->Movie;?> at <?php echo $row->Sdate;?></b></h4>
                        <?Php }  ?><br>
                         <?php
                    foreach ($j as $key => $row)  
                  { ?> 
                     <div class="" style="display: inline;font-size: 30px;">

                     <!--a href="<?php //echo base_url('index.php/addmoviecontrolle/seatview/'.$row->Stime);?>">

                     <?php //echo $row->Stime;?></a-->
                       <a  id="stime" class="button" href="<?php echo base_url();?>/index.php/addmoviecontrolle/switch_seats_counter/<?php echo $row->T_Id;?>" data-toggle="tooltip" title="please select movie time" value="" required="required" >
                       <?php echo $row->S_time;?></a><!--<?php //echo $row->Stime;?>!-->


                     </div>
                        
                         <?Php }  ?>
                         <br>
                         <?php 
                          foreach ($st as $key => $row)  
                             { ?> 
                         <h4>Show Time:<input type="text" style="border:none; width:50px;color:blue; " name="tm1" id="tm1" value="<?php echo $row->S_time; ?>" readonly></h4>
                           <?php } ?>   

                         <?php                   
  foreach ($rc as $row)  
    { ?> 
    <input type="hidden" id="r_cost" name="tcost" value="<?= $row->Ticket_cost;?>">
    <br>
    <br>
    <?Php }  ?>
                         <!--<input type="hidden" name="tm" id="tm">!-->
                         </div>
                        <!--<div class="row">
                         <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                        <label>  Date</label>
                       <input type="text" placeholder="date of show" name="sdate" id="sdate"  class="form-control" req readonly>
                      </div>
                      

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                        <label>Name *</label>
                        <input type="text" placeholder="please enteryour name" class="form-control" name="name" required="required" >
                         </div>
                         </div>!-->
                           
                        </div>
                          <div style="display:inline;">

                         <?php foreach($r as $key => $s){ 

                          $var=$s['Status'];
                          $var1=$s['Reservation_date'];
                          $var2=$s['Reservation_Time'];
                           $sd=date('m/d/Y');
                        if(($var=="Success") && ($var1==$sd) && ($var2==$tid))
                        {
                          ?><label>
                           <input style="visibility: hidden;" type="checkbox"  id="chk" name="a1[]"  value="<?php echo $s['S_id'];?>"><?php echo $s['Seat_Name']; ?>
                          <img id="st?>" class="set" src="<?php echo base_url();?>images/ys3.png">
                          </label>
                         <?Php } 
                         elseif(($var=="hold") && ($var1==$sd) && ($var2==$tid))
                          { 
                               ?>
                            <label>
                         <input  style="visibility: hidden;" type="checkbox"  id="chk" name="a1[]"  value="<?php echo $s['S_id'];?>"><?php echo $s['Seat_Name']; ?>
                        <img id= "st" class="set" src="<?php echo base_url();?>images/uav3.png">
                        </label>
                        <?php }
                          else{ 
                               ?>
                            <label>
                         <input  style="visibility: hidden;" type="checkbox"  id="chk" name="a1[]"  value="<?php echo $s['S_id'];?>"><?php echo $s['Seat_Name']; ?>
                        <img id= "st" class="set" src="<?php echo base_url();?>images/av3.png">
                        </label>
                        <?php }?>
                        
                         <?php } ?>
                              </div>
                              <div class="row">
                              <div class="column">
                                  <input type="submit" id="hold" value="Hold" name="hold" class="btn btn-primary  pull-right">
                                </div>
                                <div class="column">
                                <input type="submit" id="unhold" value="Unhold" name="unhold" class="btn btn-primary  pull-right">
                                </div>
                                <div class="column">
                                 <input type="submit" id="ticket" value="Ticket" name="ticket" class="btn btn-primary  pull-right">
                                </div>
                                </div>
                                 </form>
                                 </table>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

        <div class="clearfix"></div>

        <!--************************row  end******************************************************************* -->




      </div>
    </div>
  </div>
</div>
</div>
<?php echo $footer ?>
<link href="<?php echo base_url();?>assets/jqui/jq_jquery-ui.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/jqui/jquery-ui.js"  type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
    $("#sdate").datepicker().datepicker();
   $('.button').on('click',function(){
    $(this).toggleClass('ButtonClicked');
    
});

</script>

<script type="text/javascript">
$('.set').click(function(){
   var img1 = "<?php echo base_url();?>images/av3.png";
    img2 = "<?php echo base_url();?>images/uav3.png";
   src = $(this).attr('src');
   img = (src === img1)? img2 : img1;
   $(this).attr('src',img);

});
 $(document).ready(function() {
$(document).on('click','#btn',function(){
 var btn = $(this).val();
 //var d=new Date();
$(document).find('#tm').val(btn);

});





 });
 

</script>

<script>
 $(document).ready(function() {
$(document).on('click','#hold',function(){
 var btn = $(this).val();
 //var d=new Date();
$(document).find('#count').val(btn);
     


});

$(document).on('click','#unhold',function(){
 var btn = $(this).val();
 //var d=new Date();
$(document).find('#count').val(btn);
     


});

$(document).on('click','#ticket',function(){
 var btn = $(this).val();//alert(btn);exit();
 //var d=new Date();
$(document).find('#count').val(btn);
     var bn=document.getElementById('tm').value;//alert(bn);//exit();

if(bn=="")
{
  //alert("Plese select time");
  // noty({text::"dfdsfsdfds",type: 'success',layout: 'top', timeout: 3000});
  //exit();
}
else
{
  var tm = $('#tm').val();
 // $.post('<?php //echo base_url();?>index.php/addmoviecontrolle/counter/',
 //                    {
                      
 //                      count:btn,
 //                      tm:tm
                        
 //                    },
 //                   function(data)
 //                    {
 //                        if(data.status){

 //                            var datas = data.data;
 //                          $('.passmsg').html("Agent Already Exist");
 //                          //  $('.ps_date').html(datas.agent_mail);
 //                        }else{
 //                            $('.ps_date').html("");
 //                        }


 //                    },'json');
}


});

  });

</script>



  




</body>
</html>
                   
              
