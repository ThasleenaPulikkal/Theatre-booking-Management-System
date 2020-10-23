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
</style>
<link href="<?php echo base_url();?>assets/jqui/jq_jquery-ui.css" rel="stylesheet"></style>
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
                <h2>Reservation/Unhold<small></small></h2>
                 <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="">
                <table border="0">
                <form id="moviedetails" method="post" action="<?php echo base_url();?>index.php/addmoviecontrolle/holdseat" enctype="multipart/form-data" >
              
                         <?php
                    foreach ($j as $key => $row)  
                  { ?> 
                     <div class="box" style="display: inline;font-size: 30px;">

                     <!--a href="<?php //echo base_url('index.php/addmoviecontrolle/seatview/'.$row->Stime);?>">

                     <?php //echo $row->Stime;?></a-->
                       <input type="button" name="bt1" id="btn" value="<?php echo $row->Stime;?>"><?php //echo $row->Stime;?>


                     </div>
                        
                         <?Php }  ?>
                         <br>
                         <input type="hidden" name="tm" id="tm">
                         <div class="mstyle">
                            <?php
                    foreach ($m as $key => $row)  
                  { ?> 
                       <?php echo $row->Movie;?> at <?php echo $row->Sdate;?>
                        <?Php }  ?><br>
                        </div>
                         <div style="display:inline;">
                         <?php foreach($r as $key => $s){ ?>
                         <label>
                        <input style="visibility: visible;" type="checkbox"  id="chk" name="a1[]"  value="<?php echo $s->S_id;?>"><?php echo $s->Seat_Name; ?>
                        <img id="st" class="set" src="<?php echo base_url();?>images/av3.png">
                        </label>
                         <?php } ?>
                              </div>
                                  <button id="gen_submit" type="submit" name="submit" class="btn btn-primary  pull-right">
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
<?php echo $footer ?>
<script>
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
        $("#agent_mail").focusout(function() {
           
            var agent_name = $('#agent_name').val();
            var agent_mail = $('#agent_mail').val();
            $.post('<?php echo base_url();?>addmoviecontroller/seatdetails/',
                    {
                        
                        ag_mail:agent_mail,
                         ag_mail:agent_mail,
                          ag_mail:agent_mail

                    },
                   function(data)
                    {
                        if(data.status){

                            var datas = data.data;
                          $('.passmsg').html("Agent Already Exist");
                          //  $('.ps_date').html(datas.agent_mail);
                        }else{
                            $('.ps_date').html("");
                        }


                    },'json');
        });

        $("#agent_Contact").focusout(function() {

            var agent_name = $('#agent_name').val();
            var agent_contact = $('#agent_Contact').val();
            $.post('<?php echo base_url();?>Branch/agent_contactduplication/',
                    {

                        agent_contact:agent_contact

                    },
                    function(data)
                    {
                        if(data.status){

                            var datas = data.data;
                            $('.passmsg1').html("Agent Already Exist");
                            //  $('.ps_date').html(datas.agent_mail);
                        }else{
                            $('.ps_date').html("");
                        }


                    },'json');
        });
    });



</script>

  
    <script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.min.js"></script>

    
    <!--script src="<?php //echo base_url();?>style/dist/js/app.min.js"></script-->


     <!--script src="<?php echo base_url();?>style/plugins/jQuery/jQuery-2.1.4.min.js"></script-->
      <script type="text/javascript">
  $(function() {
  $('.form-group').on('keydown', '.agent_Contact, .agent_altrcontact', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
});
</script>
<!-- Datatables -->

<!--============new customer popup start here=================-->



<script>
    $("#sdate").datepicker().datepicker();
</script>

</body>
</html>
                   
              