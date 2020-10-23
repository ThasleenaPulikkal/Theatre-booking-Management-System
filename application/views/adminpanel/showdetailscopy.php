<?php echo $header; ?>
</head>
<?php echo $nav; ?>
<body>
     
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2><small>Movies</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                </ul>
                <div class="clearfix"></div>
              </div>

                   <div class="x_content">
                <div class="">
                  <div class="table-responsive tabmargntp30">
                   <div class="col-md-12">
                   <section class="content-header">
                    <h1>Movies<small></small>
                    </h1>
                  </section>

                  
                   <table border="1" class="display table-bordered table-striped" cellspacing="0" width="100%">
                   <tbody>
                     <tr class="tablbg">
                                    <th>No</th>
                                    <th>Movie</th>
                                    <th>Language</th>
                                    <th>Date</th>
                                     <th>Image</th>
                                     <th>Starting Time</th>
                                     <th>Ending Time</th>
                                     <th>Action</th>
                                      </tr>
                                <?php  
         foreach ($h as $key => $row)  
         {  
            ?><tr>  
            <td><?php echo $key+1;?></td>  
            <td><?php echo $row->Movie;?></td>
            <td><?php echo $row->lang;?></td>
            <td><?php echo $row->Sdate;?></td>
           <td><img class="img-responsive pad" src="<?php echo base_url();?>/uploads/<?php echo $row->Image;?>" 
            width="100%" height="100%" alt="Photo"></td> 
            <td><?php echo $row->Stime;?></td>
             <td><?php echo $row->Etime;?></td> 
             <td><a href="<?php echo site_url('addmoviecontrolle/show_edit_id/'.$row->No.'')?>" data-toggle="tooltip" title="Edit" data-placement="bottom" type="button" class="btn btn-primary hoverefct fllft"><i class="fa  fa-pencil-square-o" aria-hidden="true"></i></a>
             <input type="hidden" value="<?php echo $row->No;?>">
                <a href="<?php echo site_url('addmoviecontrolle/delete/'.$row->No.'')?>"  data-toggle="tooltip" title="delete" data-placement="bottom" type="button" class="btn btn-danger hoverefct fllft eraseable" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
        <div class="clearfix"></div>
        
        <!--************************row  end******************************************************************* -->
        </div>
    </div>
  
</form>
</body>
<?php echo $footer; ?>
</html>

                   