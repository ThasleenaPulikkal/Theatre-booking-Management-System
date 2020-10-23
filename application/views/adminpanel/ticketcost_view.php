

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
                <h3>Add Ticket Cost<small></small></h3>
                 <ul class="nav navbar-right panel_toolbox">
                              
                  
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
                                            <th>Type</th>
                                            <th>Cost</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        


                                       
                                        <tbody>

                                            <?php
         foreach ($c as $key => $row)  
         {  
            ?><tr>  
            <td><?php echo $key+1 ?></td>  
            <td ><?php  echo $row->Type;?></td>
            <td class="ticketcost "  name="tcost" >
            <?= $row->Ticket_cost;?>
            </td>

             <td ><a data-toggle="tooltip" title="Edit" data-placement="bottom" type="button" class="btn btn-primary hoverefct fllft textContent " value="<?php echo $row->Id;?>"><i class="fa  fa-pencil-square-o" aria-hidden="true"></i></a>
             <input type="hidden" class="hiddenid" value="<?php echo $row->Id;?>">
                


                <a href="<?php echo site_url('addmoviecontrolle/delete_cost/'.$row->Id.'')?>"   data-toggle="tooltip" title="delete" data-placement="bottom" type="button" class="btn btn-danger hoverefct fllft eraseable " onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
               

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


<script>
$(document).on('click','.textContent',function(){

var ticket_cost=$(this).parent().parent().find('.ticketcost').text();
$(this).parent().parent().find('.ticketcost').text("");
$(this).parent().parent().find('.ticketcost').append($(
'<input>',{
type :'text',
value : ticket_cost,
name :'tcost_new',
class :'t_cost_new'

}
));

$(this).text('Save');
$(this).addClass('edit_cost_new')
$(this).removeClass('textContent')

});


$(document).on('click','.edit_cost_new',function(){

var id=$(this).parent().parent().find('.hiddenid').val();
// alert(id);exit();
var new_type_name=$(this).parent().parent().find('.t_cost_new').val();
var visa_type_current=$(this);

//alert(visa_type_current);exit();
$.post('<?php echo base_url();?>index.php/addmoviecontrolle/update_cost',{

id : id,
new_type_name : new_type_name
},
function(data) {

if(data.status){

alert("Ticket cost has been updated successfully");
var new_value=visa_type_current.parent().parent().find('.t_cost_new').val();
visa_type_current.parent().parent().find('.t_cost_new').remove();
visa_type_current.parent().parent().find('.ticketcost').text(new_value);
visa_type_current.text("");
visa_type_current.removeClass('edit_cost_new').append($('<i class="fa  fa-pencil-square-o"></i>'));
visa_type_current.addClass('textContent');

}
else{
alert(data.reason);
}

},'json'

);

})

</script>
</script>
</body>
</html>