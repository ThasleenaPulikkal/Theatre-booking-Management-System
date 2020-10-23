<html>
<head>
<?php echo $header; ?>
 
 <script src="<?php echo base_url();?>js/jquery.noty.packaged.min.js" type="text/javascript" charset="utf-8"></script>   
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
              <!--button type="button" class="btn btn-primary pull-right"><i class="fa fa-print" aria-hidden="true"></i> Print Report</button-->
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h3>Movie List <small></small></h3>
                <ul class="nav navbar-right panel_toolbox">
                <li><a onclick="goBack()" data-toggle="tooltip" title="" data-original-title="Go Back"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> </li>
                  <!--li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li-->
                </ul>


                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="tbleovrscroll">
                
                  <table id="mytable" class="display table-bordered table-striped" cellspacing="0" width="100%">
                      <!--<div style="float: right;padding: 6px 179px 4px;margin-top: -3px;position: absolute;right: -7px;z-index: 1"><a href="<?php echo  base_url();?>Branch/agent_mail"> <input type="submit" value="Compose Mail" class="btn btn-danger" style="height: 26px;"></a></div>-->
        <thead>
                                    <tr class="tablbg">
                                     <th>No</th>
                                    <th>Movie</th>
                                    <th>Language</th>
                                    <th>Date</th>
                                     <th>Image</th>
                                     <th>Starting Time</th>
                                     <th>Ending Time</th>
                                     <th>Status</th>
                                     <th>Action</th>
                                     </tr>
                                     </thead>
        
         <tbody style=" height:300px;overflow:scroll">
         <?php
         foreach ($h as $key => $row)  
         {  

            ?>
            <form id="movied_edit"><tr>  
            <td><?php echo $row->No;?></td>  
            <td><?php echo $row->Movie;?></td>
            <td><?php echo $row->lang;?></td>
            <td><?php echo $row->Sdate;?></td>
           <td><img class="img-responsive pad" src="<?php echo base_url();?>uploads/<?php echo $row->Image;?>" 
            width="100%" height="100%" alt="Photo"></td> 
            <td><?php echo $row->S_time;?></td>
             <td><?php echo $row->E_time;?></td> 
             <td><?php echo $row->Status;?></td> 

             <td><a href="<?php echo site_url('addmoviecontrolle/show_edit_id/'.$row->Movie_id.'')?>"  data-toggle="tooltip" title="Edit" data-placement="bottom" type="button" class="btn btn-primary hoverefct fllft"><i class="fa  fa-pencil-square-o" aria-hidden="true"></i></a>
             <input type="hidden" name="mid" value="<?php echo $row->Movie_id;?>">
                <button data-id="<?php echo $row->Movie_id;?>"  type="submit" data-toggle="tooltip" title="delete"  id="edit_btn" data-placement="bottom" type="button" class="btn btn-danger hoverefct fllft eraseable btn_delete" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </td>
           
        </tr></form>
         <?php }  ?>

        </tbody>

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
$(".btn_delete").click(function(e) {
    var id = $(this).attr('data-id');
    var url ="<?php echo base_url()?>index.php/addmoviecontrolle/delete/"+id; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           // serializes the form's elements.
           success: function(data)
            {
              noty({text:"Successfully deleted",type: 'confirm',layout: 'top', timeout: 3000});
               setTimeout(function()
               {
                window.location="<?php echo base_url().'index.php/addmoviecontrolle/select'?>";
               },3000);
            }
            // show response from  
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
</script>
  

</body>
</html>