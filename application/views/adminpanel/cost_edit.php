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
                <h3>Edit Movie Cost<small></small></h3>
                  <ul class="nav navbar-right panel_toolbox">
                <li><a onclick="goBack()" data-toggle="tooltip" title="" data-original-title="Go Back"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> </li>
                  <!--li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li-->
                </ul>


                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="">


                  <form class="form-horizontal Calendar" method="post" action="<?php echo base_url();?>index.php/addmoviecontrolle/update_cost" enctype="multipart/form-data">
                       <input type="hidden" class="form-control" name="no" value="<?= $cost->Id;?>">
                        <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                        <label> Ticket type*</label>
                        <input type="text" class="form-control" name="type" value="<?= $cost->Type;?>">
                         </div>
                         <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                        <label>Ticket cost *</label>
                        <input type="text" class="form-control" name="cost" value="<?= $cost->Ticket_cost;?>">
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




</body>
</html>