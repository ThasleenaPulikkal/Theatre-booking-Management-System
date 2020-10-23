
<style>


#navigation { position: absolute; top:0; right:0;width:100%;height:55px;background-color:black;}

#navMain {
    list-style: none;
    font-family: tahoma;
    font-size: 12px;
    
    float: right;
    margin: 0;
    padding: 0;

    border-radius: 5px;
    -moz-border-radius: 5px;
    4-webkit-border-radous: 5px;
}
#navMain > li {
    float: left;
    position: relative;
  
}
#navMain > li > a {
    color: #f4e4e6;
    float: left;
    text-decoration: none;
    padding: 11px 18px;
   
}
#navMain a {
  font color: :white;
    
}
#navMain ul {
    display: none;
}
#navMain ul {
    display: none;
    position: absolute;
    list-style: none;
    left: 0;
    padding: 0;
    margin: 0;
   
     background-color:black;
}
#navMain ul li a {
   
    text-decoration: none;
   
    padding: 6px 7px;
   
    font-size: 20px;
}
#navMain li:hover ul {
    display: block;
    top: 39px;
    min-width: 200px;
}
.button{
  display:block;
  width: 115px;
  height:40px;
  background: #E7532D;
  padding:10px;
  text-align:center;
  border-radius:5px;
  color:white;
  font-weight:bold;
}
.buttonstyl{
  background: #E7532D;
  text-align:center;
  color:white;
  font-weight:bold;

}

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</style>

<script type="text/javascript">
 $(document).on('change','.mov',function(){

 var bid= $(this).val();
//alert(bid);exit();

            $.post('<?php echo base_url();?>index.php/user_controller/getshowdate',{
                        bid:bid,

                    },
                    function(data){

                        if(data.status){
                            var data=data.data;
                            var result=data.getshowdate;


                            var option='<option>please select show date</option>';
                            for(var i=0;i<result.length;i++)
                            {
                              var sdate=result[i].Sdate;
                              var id=result[i].Movieid;
                              option+='<option class="emp" value="'+sdate+'">'+sdate+'</option>';

                            }
                            $('#sdate').html(option);
                        } else{
                            alert(data.reason);
                        }

                    },'json'
            );
 });
</script>

</head>
<body>
<section>
        <!-- Content Starts Here -->
        


       
        <nav id="navigation">
            <ul id="navMain">
                <li><a href="<?php echo base_url();?>/index.php/user_controller/index">Home</a></li>
                <li class="currentPage"><a href="<?php echo base_url();?>/index.php/user_controller/help"> Help</a></li>
                    <li><a href="<?php echo base_url();?>/index.php/user_controller/about">Contact Us</a></li>

                       
                        <li><!--a href="<?php //echo base_url('index.php/user_controller/user_login');?>" data-target="#myModal" name="hk">Lgin</a-->
                            
                            

                        <a href="<?php echo base_url();?>/index.php/user_controller/index">Signout</a></li>
                       <li><a data-toggle="modal"  name="book" class="button"  style="cursor: pointer;" data-target="#myModal2" >Book show</a></li>
  
                </ul>
        </nav>



<div id="myModal2" class="modal fade">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-body">
        <form action="<?php echo base_url();?>/index.php/user_controller/bookshow" method="post">
        <div class="row">
         <div class="col-md-8"><label>Movie</label>
         <select name="movie" id="movie" class="form-control mov" required="required">
          <option value="">Please select movie name</option>
          <?php foreach($m as $row){ ?>
          <option value="<?php echo $row->Movie_id;?> " ><?php echo $row->Movie; ?></option>
                         <?php } ?>
                         </select>
                         
          </div>
          </div>
          <div class="row">
           <div class="col-md-8" ><label>show date</label><br>
          <select name="sdate" class="form-control" id="sdate">
           </select>
      </div>
      </div>

        <div class="modal-footer">
        <input type="submit" class="buttonstyl"  id="bookbtn" value="Submit" >
          <button type="button" class="buttonstyl" data-dismiss="modal">Close</button>
        </div>
        </form>
        
      </div>
    </div>
    </div>
</div>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
              <h4>Sign in</h4>

               
           <!-- <div type="button" class="btn" data-toggle="popover" data-placement="right" title="" data-content="You can add a new category of Service here" data-original-title=""><i class="fa fa-info-circle" aria-hidden="true"></i></div>-->
           
            </div>
            <div class="modal-body">
            
                 <form action="<?php echo base_url();?>/index.php/user_controller/loginuser1" method="post">
                 <div class="form-group"><input type="hidden" name="id_val" id="id_val" >
                     <div class="modal-body div_salary_table">
                    </div>
                   <div class="row">
                     <div class="col-md-6"> 
                      <input type="email" class="form-control" name="uname" id="uname" placeholder="Enter Email" required>
                      </div>
                      </div>
                     <br>
                <div class="row">
                     <div class="col-md-6"> 
              <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
              </div></div>
    
   
    <div style="display:inline">
    <!-- <input type="checkbox" checked="checked"> Remember me -->
      <!-- <a href="#" style="margin-left:250px;">Forgot password?</a> -->
      </div>
  </div>

 <!-- <div style="display:inline;float:left;padding-left:5px">
   Don't have an account? <a href="<?php echo base_url();?>/index.php/user_controller/index">Sign up</a>!-->
 
   <div class="row">
                      <div style="margin-top: 15px;" class="modal-footer">
                       <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <input type="submit" class="btn btn-primary antosubmit " style="float: left;" value="Sign in">
                         <p class="pull-right modal-title" style="float:left;text-align: right;">Not a member ?<span>  <a href="<?php echo base_url();?>/index.php/user_controller/user_login">Signup</a></span>
                        </a></p>

                     <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->

                        </div>
                        </div>
                </div>
</form>
        </div>
    </div>
    </div>
    </div>

<!-- <div class="modal fade" id="Modal2" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a small modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
 -->
        <!-- Content Ends Here -->
        </section>



  
   