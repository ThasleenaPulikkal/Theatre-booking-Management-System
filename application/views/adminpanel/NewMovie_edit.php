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

</head>

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
          <div
           class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Edit Movie Details<small></small></h2>

                            <ul class="nav navbar-right panel_toolbox">
                <li><a onclick="goBack()" data-toggle="tooltip" title="" data-original-title="Go Back"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> </li>
                  <!--li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li-->
                </ul>


                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="">


                  <form class="form-horizontal Calendar" method="post" action="<?php echo base_url();?>index.php/addmoviecontrolle/updateid_1" enctype="multipart/form-data">
                         <input type="hidden" class="form-control" name="no" value="<?= $movie_details->Movie_id;?>">
                        <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                        <label>Movie *</label>
                        <input type="text" class="form-control" name="moviename" value="<?= $movie_details->Movie;?>">
                         </div>
                         <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                         <label>Language *</label><span class="passmsg1"></span>
                       
                       <!--<input type="text" class="form-control" name="Language" value="<?= $movie_details->lang;?>">!-->
                       <select name="language" class="form-control">
                       <?php foreach($language as $lang){ ?>
                        <option <?php echo $movie_details->l_id==$lang->l_id ? 'selected="selected"' : '';?> value="<?php echo $lang->l_id ;?>"><?php echo $lang->Language; ?></option>
                         <?php } ?>
                         
                         </select>
                      </div>

                        <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                       <label>Choose Image</label>
                       <div class="input-group">
                       <label class="input-group-btn">
                       <span class="btn btn-primary" style="height:30px">
                       Browse
                      <input type="file" style="display: none;" name="userfile" value="<?= $movie_details->Image;?> id="pro_image" size="20" class="image_src form-control validate[required]">
                      </span>
                      </label>
                      <input type="text" class="form-control" readonly>
                        </div>
                        </div>
                         <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                        <label>Date</label>
                       <input type="text" placeholder="date of show" name="sdate" id="sdate"  class="form-control validate[required]" value="<?= $movie_details->Sdate;?>">
                      </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                        <label>Starting Time *</label>
                        <input type="text" placeholder="stime" class="form-control" name="stime"  value="<?= $movie_details->Stime;?>">
                            </div>
                             <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                        <label>Ending Time *</label>
                        <input type="text" placeholder="stime" class="form-control" name="etime" value="<?= $movie_details->Etime;?>" >
                        </div>
                       <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                       <label>Status*</label>
                       <select name="status"  class="form-control">
                       <option value="<?= $movie_details->Status;?>"> <?= $movie_details->Status;?></option>
              
                           <option value="Closed">Closed</option>
                           </select>
                       </div>
                     <div class="box-footer">
                                <button id="gen_submit" type="submit" name="submit" class="btn btn-primary  pull-right">
                                Update</button>

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
</div>
<?php echo $footer ?>
<script>
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




</body>
</html>