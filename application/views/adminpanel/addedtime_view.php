 <html>
<head>
<?php echo $header; ?>
<link href="<?php echo base_url();?>css/fixed-data-table.css" rel="stylesheet">
 <?php echo $nav ?>    
</head>
<body>
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
                              <li>
                         <div class="pull-right"> <a href="<?php echo base_url();?>index.php/addmoviecontrolle/addshow_time" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Add Time"><i class="fa fa-plus"></i> Add Time</a> </div>
                             </li>
                  
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                            </ul>
                            <div class="clearfix"></div>
                         <div class="x_content">
                            <div class="">
                                <div class="table-responsive tabmargntp30">
                                    <table id="patient_table" class="table display table-bordered table-striped responsive-utilities">
                                        <thead>

                                        <thead style="background-color:#148055;">
                                        <tr>
                                            <th>No</th>
                                            <th>Time</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        


                                       
                                        <tbody>

                                            <?php
         foreach ($h as $key => $row)  
         {  
            ?><tr>  
            <td><?php echo $key+1 ?></td>  
            <td><?php echo $row->S_time;?></td>
             <td><a href="<?php echo site_url('addmoviecontrolle/edit_time/'.$row->T_Id.'')?>" data-toggle="tooltip" title="Edit" data-placement="bottom" type="button" class="btn btn-primary hoverefct fllft"><i class="fa  fa-pencil-square-o" aria-hidden="true"></i></a>
             <input type="hidden" value="<?php echo $row->T_Id;?>">
                <a href="<?php echo site_url('addmoviecontrolle/delete_time/'.$row->T_Id.'')?>"  data-toggle="tooltip" title="delete" data-placement="bottom" type="button" class="btn btn-danger hoverefct fllft eraseable" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </td>

           
        </tr>
         <?php }  ?>


                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>

             

              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>
<?php echo $footer; ?>
</body>
</html>