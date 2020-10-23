<?php include('header.php'); ?>
</head>
<?php include('nav.php'); ?>
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <div type="button" class="btn" data-toggle="popover" data-placement="right" title="" data-content="This is the name that will be shown on invoices, bills created for this contact."><i class="fa fa-info-circle" aria-hidden="true"></i></div>
            </h3>
          </div>
          <div class="title_right">
            <div class="col-md-4 col-sm-6 col-xs-8 form-group pull-right top_search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
                </span> </div>
            </div>
             <div class="col-md-1 col-sm-2 col-xs-4 pull-right form-group ">
                 
                 
                 <a href="" type="button" class="dropdown-toggle info-number"  title="Add New Service" data-toggle="modal" data-target="#add-more">


                  
                   <span class="addmdlbtn"> + </span>
                    
                  </a>
                  
                


                <div id="add-more" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">X</button>
        <h4 class="modal-title" style="float:left;">Add More Services</h4>
             
            <div type="button" class="btn" data-toggle="popover" data-placement="right" title="" data-content="You can add a new category of Service here" data-original-title=""><i class="fa fa-info-circle" aria-hidden="true"></i></div>
      </div>
      <div class="modal-body">
      <div class="">
      <form class="form-horizontal form-label-left" novalidate>
<div class="item form-group">
                        <label class="control-label col-md-2 col-sm-4 col-xs-12" for="name">Title <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-8 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Title" required type="text">
                        </div>
                      </div>
                    
                    
                    
                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-4 col-xs-12" for="textarea">Image <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-8 col-xs-12">
                          
                      <div class="box">
					<input type="file" name="file-7[]" id="file-7" class="inputfile inputfile-6 dsnn" data-multiple-caption="{count} files selected" multiple />
					<label for="file-7"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose a image</strong></label>
				</div>

                       
                      </div></div>
                      
                      
                      
                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-4 col-xs-12" for="textarea">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-8 col-xs-12">
                          <textarea id="textarea" required name="textarea" class="form-control col-md-7 col-xs-12" rows="8"></textarea>
                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-2">
                           <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
         <button id="send" type="submit" class="btn btn-primary"><i class="fa fa-check-square-o" aria-hidden="true"></i>  Save</button>
                        </div>
                      </div>
                    </form> 
                    
                                 
                      
      </div>
      
      
      </div>
      
      
      
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>
                  </div>
          </div>
          
          
                  
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Services<small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                <li><a onclick="goBack()"  data-toggle="tooltip" title="Go Back"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="">
                  <div class="tabmargntp30">
                    <div class="col-md-12">
                     <form class="form-label-left" novalidate>
<div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12" for="name">Title <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12 bodrnone" data-validate-length-range="6" data-validate-words="2" name="name" value="sumesh" required type="text">
                        </div>
                      </div>
                    
                    <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                      <div class="item form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12" for="textarea">image 
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          
                         
                      <div class="">
                      <div class="imagbx">
                    <img src="../images/img.jpg">
                      </div>
                      
					<input type="file" name="file-8[]" id="file-8" class="inputfile inputfile-6 dsnn" data-multiple-caption="{count} files selected" multiple />
					<label for="file-8"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose a image</strong></label>
				</div>

                        </div>

                        </div>
                      </div>
                      
                      
                      <div class="col-md-7 col-sm-6 col-xs-12">
                      <div class="item form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" for="textarea">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
              <textarea id="textarea" required name="textarea" class="form-control col-md-7 col-xs-12 bodrnone" rows="8" value="sumesh"></textarea>
                        </div>
                      </div>
                      </div></div>
                      
                    
                      <div class="form-group">
                        <div class="col-md-6">
                              <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                          <button id="send" type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Update</button>
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
        <div class="clearfix"></div>
        
        <!--************************row  end******************************************************************* -->

     
        
      </div>
    </div>
  </div>
</div>
</div>

    
<?php include('footer.php'); ?>

<!-- Datatables --> 

<!--============new customer popup start here=================-->


</body>
</html>