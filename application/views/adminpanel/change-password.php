
<?php echo $header; ?>
      <script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>

</head>
<?php echo $nav ?>
    <div class="right_col" role="main">




<div class="container">
  <!-- Trigger the modal with a button -->
 
  <!-- Modal -->
  <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" style="float:left;">Change password</h4>
               
            <div type="button" class="btn" data-toggle="popover" data-placement="right" title="" data-content="You can add a new category of Service here" data-original-title=""><i class="fa fa-info-circle" aria-hidden="true"></i></div>
           
            </div>
            <div class="modal-body">
            
                <form class="form-horizontal form-label-left"  action="<?php echo base_url();?>/index.php/addmoviecontrolle/checkpassword" method="post">
                
                     <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-4 col-xs-12" for="name">Old Password <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-8 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="Old Password" required="" type="password" name="psw" required="required">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-4 col-xs-12" for="name" >New Password <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-8 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="New Password" required="" type="password" name="npsw" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-4 col-xs-12" for="name">Confirm Password <span class="required" required="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-8 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="Conform Password " required="" type="password" name="cpsw">
                        </div>
                      </div>
                    
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-2">
                        
         <button id="send" type="submit" class="btn btn-primary"><i class="fa fa-check-square-o" aria-hidden="true"></i>  Save Password</button>
                        </div>
                      </div>
                    </form>
            </div>
        </div>
    </div>
</div>
  
</div>


    </div>
  </div>
</div>
</div>

    
<?php echo $footer ?>

<!-- Datatables --> 

<!--============new customer popup start here=================-->


</body>
</html>