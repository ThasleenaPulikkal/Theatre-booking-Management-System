 <html>


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
.bookclass
{
  font-size: :30px;
}
</style>


<?php echo $header; ?>
</head>
<body>
<?php echo $nav ?>
<script src="<?php echo base_url();?>js/jquery.noty.packaged.min.js" type="text/javascript" charset="utf-8"></script>
<link href="<?php echo base_url();?>assets/jqui/jq_jquery-ui.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/jqui/jquery-ui.js"  type="text/javascript" charset="utf-8"></script>
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
                <h2>Counter Ticket  Details<small></small></h2>
                 <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="">
                <table border="0">
                <form id="moviedetails" action="<?php echo base_url();?>index.php/addmoviecontrolle/Reservation_proceed" method="post">
                <div class="bookclass">
              <?php
                    foreach ($c as $key => $row)  
                  { ?> 
                      <?php if($key==0){?>
                                <b>Movie:<?php echo $row->Movie;?><br><br></b><input type="hidden"  name="bid" value="<?php echo $row->B_Id;?>">
                                <b> Language:<?php echo $row->Language;?><br><br></b>
                                <b>Show time:<?php echo $row->Reservation_Time;?><br><br></b>
                                 <b>Show date:<?php echo $row->Reservation_date;?><br><br></b>
                                 <b>Totel cost:<?php echo $row->Ticket_cost;?><br><br></b>
                                <b> Seat No:</b>
                          <?php }?>
                         
                          <b><?php echo $row->Seat_Name;?></b>
                            
                           
                          <?Php }?>
                        </div>
                         <button id="tkt_submit11" type="submit" name="submit" class="btn btn-primary  pull-right">
                                PROCEED</button>
                   </form>
          </table>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        </div>
    </div>
  </div>
</div>
</div>
<?php echo $footer ?>

<!--<script>
    $(document).ready(function() {
        $("#tkt_submit11").click(function() {
           
               noty({text:"Successfully reserved",type: 'success',layout: 'top', timeout: 3000});
               setTimeout(function()
               {
                window.location="<?php echo base_url().'index.php/addmoviecontrolle/counterdisplay'?>";

               },
               2000);
               
        });

        
    });



</script>!-->



</body>
</html>
                   
              