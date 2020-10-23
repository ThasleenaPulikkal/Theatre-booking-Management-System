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
.ButtonClicked {
    background-color: #0FA290;
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
    color :#0FA290  ;
    background-color : white ;
}
a.button:active {
    border : gray inset 2px ;
}
a.button:hover {
    color : #000 ;
    background-color : #ccc ;
}

</style>
<link href="<?php echo base_url();?>assets/jqui/jq_jquery-ui.css" rel="stylesheet"></style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/jqui/jquery-ui.js"  type="text/javascript" charset="utf-8"></script>
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
                <h3>Reservation<small></small></h3>
                 <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="">
                <table border="0">
                <form id="moviedetails" method="post" action="<?php echo base_url();?>index.php/addmoviecontrolle/holdseat" enctype="multipart/form-data" >
                    <?php   
                    foreach ($m as $key => $row)  
                  { ?> 
                       <h4><b><?php echo $row->Movie;?> at <?php echo $row->Sdate;?></b></h4> 
                        <?Php }  ?><br>
                        <h4 style="color:red;">Please select show time</h4>
                       <?php
                    foreach ($j as $key => $row)  
                  { ?> 
                     <div class="" style="display: inline;font-size: 30px;">
                       <a  id="stime" class="button" href="<?php echo base_url();?>/index.php/addmoviecontrolle/switch_seats_reservation/<?php echo $row->T_Id;?>" data-toggle="tooltip" title="please select movie time" value="" required="required" >
                       <?php echo $row->S_time;?></a>

                     <!--a href="<?php //echo base_url('index.php/addmoviecontrolle/seatview/'.$row->Stime);?>">

                     <?php //echo $row->Stime;?></a-->
                       <!--<input type="button" required="required" name="bt1" id="btn" value="<?php echo $row->S_time;?>"  class="button  bt1" style="font-size: 15px;height: 48px;width: 71px; ">!--><!--<?php //echo $row->Stime;?>!-->


                     </div>
                        
                         <?Php }  ?>
                         <br>
                         <input type="hidden" name="tm" id="tm">
                         
                            
                    
                   
                        </div>
                        <!--<div class="row">
                         <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                        <label> Reservation Date</label>
                       <input type="text" placeholder="date of show" name="sdate" id="sdate"  class="form-control validate[required]" required/>
                      </div>
                      

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                        <label>Name *</label>
                        <input type="text" placeholder="please enteryour name" class="form-control" name="name" required="required" >
                         </div>
                         <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                        <label>Starting Time *</label>
                        <select name="stime" id="movie" class="form-control mov" required="required">
                        <option value="">Please select time</option>
                        <?php foreach($s as $row){ ?>
                        <option value="<?php echo $row->T_Id;?> " ><?php echo $row->S_time; ?></option>
                         <?php } ?>
                         </select>
                         </div>
                         </div>!-->
                         <div style="display:inline;">

                              </div>
                              
                                  <br><button id="gen_submit" type="submit" name="submit"  class="btn btn-primary  pull-right">
                                Book Ticket</button>
                                </div>
                                 </form>
                                 </table>
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
<script type="text/javascript">

$('.set').click(function(){
   var img1 = "<?php echo base_url();?>images/av3.png";
    img2 = "<?php echo base_url();?>images/uav3.png";
   src = $(this).attr('src');
   img = (src === img1)? img2 : img1;
   $(this).attr('src',

});

 $(document).ready(function() {
$('.b').click(function(){
 var btn = $(this).val();
 $(this).toggleClass('ButtonClicked');
 //alert(btn);exit();
 //var d=new Date();
$(document).find('#tm').val(btn);

});





 });
 

</script>


<script>
    $("#sdate").datepicker().datepicker();
     $('.bt1').on('click',function(){
   
    
});

</script>
</body>
</html>
                   
              