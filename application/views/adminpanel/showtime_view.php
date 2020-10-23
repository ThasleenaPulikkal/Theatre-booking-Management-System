<!DOCTYPE html>
<html lang="en-us">

<head>
<?php echo $header; ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist/bootstrap-clockpicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://demo.itsolutionstuff.com/plugin/clockface.js"></script>
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/clockface.css">
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
          <div
           class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h3>Add Movie Time<small></small></h3>
                 <ul class="nav navbar-right panel_toolbox">
                <li><a onclick="goBack()" data-toggle="tooltip" title="" data-original-title="Go Back"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> </li>
                  <!--li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li-->
                </ul>


                
              </div>
              <div class="x_content">
                <div class="">

                <form id="moviedetails" method="post" action="<?php echo base_url();?>index.php/addmoviecontrolle/show_time"  >
                
              <div class="form-group">
             <label>Starting time:</label>
                <input data-format="hh:mm A" class="form-control sel-time-am" name="Stime" type="text">
              </div>
            <div class="form-group">
             <label>Ending time:</label>
                <input data-format="hh:mm A" class="form-control sel-time-am " type="text" name="Etime">
              </div>
             <div class="box-footer">
               <button id="gen_submit" type="submit" name="submit" class="btn btn-primary  pull-right">
                Add</button>

             </div>
          </form>

                </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        
        <!--************************row  end******************************************************************* -->




      </div>
    </div><div class="input-group clockpicker">
    <input type="text" class="form-control" value="09:30">
    <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
</div>
  </div>
</div>
</div>
<?php echo $footer ?>
    <script src="<?php echo base_url();?>dist/bootstrap-clockpicker.js"  type="text/javascript" charset="utf-8"></script>


    <script src="<?php echo base_url();?>dist/bootstrap-clockpicker.min.js"  type="text/javascript" charset="utf-8"></script>


	

</script>
<script type="text/javascript">
  $('.sel-time').clockface({format: 'HH:mm'});
  $('.sel-time-am').clockface(); 
   $('.sel-time1').clockface({format: 'HH:mm'});
  $('.sel-time-am1').clockface(); 
</script>
</body>
</html>