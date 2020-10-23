<html>
<head>
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
</style>
<script src="<?php echo base_url();?>js/jquery.noty.packaged.min.js" type="text/javascript" charset="utf-8"></script>
<link href="<?php echo base_url();?>assets/jqui/jq_jquery-ui.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/jqui/jquery-ui.js"  type="text/javascript" charset="utf-8"></script>

</head>

<body>

<?php echo $nav ?>
   
</div> <div class="right_col" role="main">
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
          <div
           class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h3>Add New Movie<small></small></h3>
                 <ul class="nav navbar-right panel_toolbox">
                <li><a onclick="goBack()" data-toggle="tooltip" title="" data-original-title="Go Back"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> </li>
                  <!--li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li-->
                </ul>


                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="">


                  <form id="moviedetails" method="post" action="<?php echo base_url();?>index.php/addmoviecontrolle/do_upload" enctype="multipart/form-data" >

                        <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                        <label>Movie *</label>
                        <input type="text" placeholder="Movie name" class="form-control" name="moviename" required pattern="[a-zA-Z][a-zA-Z ]{1,}" title="All should be characters">
                         </div>
                         <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                         <label>Language *</label><span class="passmsg1"></span>
                       <select name="language" class="form-control" required="required" >
                       <option value="">Please select</option>
                       <?php foreach($records as $lang){ ?>
                        <option value="<?php echo $lang->l_id ?>"><?php echo $lang->Language; ?></option>
                         <?php } ?>
                         </select>

                      </div>

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                       <label>Choose Image</label>
                       <div class="input-group">
                       <label class="input-group-btn">
                       <span class="btn btn-primary" style="height:30px">
                       Browse
                      <input type="file" style=" display: none;" name="userfile"  id="pro_image" size="20" class="image_src form-control validate[required]" style required="required">
                      </span>
                      </label>
                      <input type="text" class="form-control" readonly>
                        </div>
                        </div>
                         <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                        <label>Date</label>
                       <input type="text" placeholder="date of show" name="sdate" id="sdate"  class="form-control required="required" readonly>
                      </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                        <label>Starting Time *</label>
                        <select name="stime" id="stime" class="form-control Stime" required="required">
                        <option value="">Please select time</option>
                        <?php foreach($s as $row){ ?>
                        <option value="<?php echo $row->T_Id;?> " ><?php echo $row->S_time; ?></option>
                         <?php } ?>
                         </select>
  
                         </div>
                         <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                        <label>Ending Time *</label>
                        <select name="etime" id="movie" class="form-control mov" required="required">
                        <option value="">Please select time</option>
                        <?php foreach($s as $row){ ?>
                        <option value="<?php echo $row->T_Id;?> " ><?php echo $row->E_time; ?></option>
                         <?php } ?>
                         </select>
                        </div>
                       <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                       <label>Status*</label>
                        <select name="status"  class="form-control" required="required">
                        <option value="">Please select</option>
                          <option value="Active">Active</option>
                           <option value="Closed">Closed</option>
                           </select>
                      </div>
                      <div class="box-footer">
                                <button id="gen_submit" type="submit" name="submit" class="btn btn-primary  pull-right">
                                Add New Movie</button>

                            </div>
          </form>

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
<!--<?php echo $footer ;
  //if(isset($_GET['success'])){
?>
  //<script>  
    //noty({text:"Successfully Added",type: 'success',layout: 'top', timeout: 3000});
  //</script>
<?php
  //}
?>!-->


<!--<script>
    $(document).ready(function() {
        $("#agent_mail").focusout(function() {
           
            var agent_name = $('#agent_name').val();
            var agent_mail = $('#agent_mail').val();
            $.post('<?php echo base_url();?>Branch/agent_duplication/',
                    {
                        
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
            $.post('<?php //echo base_url();?>Branch/agent_contactduplication/',
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


                    },'json');    e.keyCode)&&e.preventDefault()});
});
</script>!-->
<!-- Datatables -->

<!--============new customer popup start here=================-->



<script>
   $(function() {
    $( "#sdate" ).datepicker({ minDate: 0, dateFormat: 'dd/mm/y'});
  });

</script>


</body>
</html>