

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head id="Head1">title>SURABHI CINIMAS</title>
  <link href="<?php echo base_url();?>/images/fav.png" rel="shortcut icon">
  <meta name="description" content="Online Booking of all Movies"/><meta name="keywords" content="Online Booking"/>
<link rel="stylesheet" type="text/css" href="//cdn11.ticketnew.com/css/main.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
        .tn-main-content {
            width: 80%;
        }

        .tn-seating-chart {
            width: 100%;
        }

        .tn-class-grid-container .tn-class-grid table td {
            min-width: 24px;
            min-height: 24px;
            padding: 4px 3px;
            font-size: 14px;
            color: #757575;
            cursor: pointer;
            background-size: 24px;
        }

        .tn-class-grid-container h5 {
            text-align: center;
        }
        a.button {
    line-height: 180%;
    padding: 2px;
    border : gray outset 2px ;
    text-decoration: none;     /* no underline */
}
a.button:link {
    color : #00a ;
    background-color : white ;
}
a.button:visited {
    color : #009 ;
    background-color : white ;
}
a.button:active {
    border : gray inset 2px ;
}
a.button:hover {
    color : #000 ;
    background-color : #ccc ;
}
.buttoncontinue {
    background-color:#E7532D;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    width: 278px;
}

         
    </style>
    </head>
<?php echo $nav ?>

<form name="form1" method="post" action="" id="form1">
<div>

</div>



<div>

   
  <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="67C198EC" />
    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="" />
</div>


       
           <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/A0CA4EE8-EB7A-094C-BB53-AD30DA0A6FF5/main.js" charset="UTF-8"></script>
            <script src="<?php echo base_url();?>lib/jquery-1.9.1.min.js"></script>

           </head>
<br>
<br>
<br>
<div id="content">
            <div class="tn-section">
                <div class="tn-section-content tn-no-padding" style="width: 100%;">
                    <div class="tn-main-and-sidebar-content">
                        <div class="tn-main-content">
                        
                            <div id="seat_select_container" class="tn-main-inner-content tn-seating-chart tn-scroll"><div id='divlvlrt20' class='tn-class-grid-container' data-lvlrt20=110 data-msg='' data-areaname='Upper Circle' data-fb='False'><h5></h5>
                            <div class='tn-class-grid' align='center' data-max=10>
                            </div>
                            <br>
                            <h5 style="color:red">Please Select Show time </h5>
                            
                            <?php foreach($t as $row){ ?>
                             <div class="stime" style="display: inline-block;vertical-align: top;margin-right: 7px;font-size: 20px">
                       <a  id="stime" class="button" href="<?php echo base_url();?>/index.php/user_controller/switch_seats/<?php echo $row->T_Id;?>/<?php echo $d;?>" data-toggle="tooltip" title="please select movie time" value="" required="required" >
                       <?php echo $row->S_time;?></a>
                        
                        </div>
                         <?php } ?>
                         
                         <div class='tn-class-grid' align='center' data-max=10>
                        <br>
                        <br>

                      
 <?php   
  foreach ($rc as $row)  
    { ?> 
    <input type="hidden" id="r_cost" value="<?= $row->Ticket_cost;?>">
    <br>
    <br>
    <?Php }  ?>
     
                        
                         
  </div></div></div>


<script type="text/javascript">
$('.set').click(function(){

  var img1 = "<?php echo base_url();?>images/av3.png";
   img2 = "<?php echo base_url();?>images/uav3.png";
   src = $(this).attr('src');
   img = (src === img1)? img2 : img1;
   $(this).attr('src',img);
});
  //var count=$('[name="a1[]"]:checked').lengt;
    
      //count++;
    //do something
    $("input:checkbox").change(function () {
    //$('#count').text($("input:checkbox:checked").length);
     var count=$("input:checkbox:checked").length;
     //alert(count);exit(); 
    $(document).find('#count').val(count);
    var qty = $('#count').val();
    var rcost=$('#r_cost').val();
     var tcost=qty*rcost;
    $(document).find('#gt').val(tcost);
 }); 


</script>
<!--<script type="text/javascript">
 
$(document).on('click','#btn',function(){
 var st = $(this).val();
 $(this).toggleClass('ButtonClicked');
 //alert(btn);exit();
 //var d=new Date();
$(document).find('#showtime').val(st);
 $.post('<?php //echo base_url();?>index.php/user_controller/get_seats',{

                        showtime:st,

                    }
                    );

});

  
    

</script>!-->
                         
                          

                            <div class="tn-movie-screen-block">
                                 
                                <div class="tn-movie-screen">
                                    <p>Screen This Way</p>
                                </div>
                            </div>
                            <div class="tn-movie-seat-legends">
                            <br>


                                <ul>
                                    <li><span class="tn-seat-label">Available</span><img src="<?php echo base_url();?>images/av3.png"></li>
                                    <li><span class="tn-seat-label">Selected</span><img src="<?php echo base_url();?>images/uav3.png"></li>
                                    <li><span class="tn-seat-label">Reseved</span> <img src="<?php echo base_url();?>images/ys3.png"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tn-sidebar-content">
                            <div class="tn-sidebar-inner-content">
                                <div id="divBookingInfo"><div class='tn-movie-info tn-block'>
                                <?php   
                                 foreach ($rc as $row)  
                                  { ?> 
                                  <input type="hidden" id="r_cost" value="<?= $row->Ticket_cost;?>">
                                   <?Php }  ?>

                                <?php

                                  
                             foreach ($b as $key => $row)  
                             { ?> 
                          <h4><b>
                          <br>
                         <input style="border:none;width:300px; " type="text" value="<?php echo $row->Movie;?>" name="Movie" readonly/>
                         </b></h4>
                           <?Php }  ?>
                          
                               <h5>Malayalam | 2D | U</h5></div>
                               <div class='tn-theatre-info tn-block tn-no-border'>
                               <h6 class='tn-margin-bottom-10'>Theatre</h6><h5>Surabhi Theatre - Calicut </h5></div><div class='tn-movie-showtime tn-block'><h6 class='tn-margin-bottom-10'>Showdate</h6><h5><span class='tn-date-tim'>
                               <input style="border:none;" type="text" name="sdate" value="<?php echo $d; ?>" readonly /> 
                                   
                                  </span>&nbsp;&nbsp;</h5></div></div>

                                <div class="tn-selected-seats tn-block">
                          
                                    <h6 class='tn-margin-bottom-10'>Show Time</h6><h5><span class='tn-date-tim'><input type="text"  id="showtime" style="border:none; width:40px; " readonly />
          <ul id="select_seats_area">
                                   
                                   
                                  </span>&nbsp;&nbsp;</h5>
                                    </ul>
                                </div>
                                <div id="divPriceInfo" class="tn-block tn-items-count-and-price">
                                    <table class="tn-table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h5 id="select_seat_count"><input type="text" name="qty" id="count" style="border:none; width:20px; " readonly /> Seat(s)</h5>
                                                </td>
                                                <td>
                                                    <h3 class="tn-red">&#8377;<span id="select_seat_price">
                                                    <input type="text" name="gtotal" id="gt" style="border:none; width:51px;margin-right:10px " readonly /></span></h3>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="buttoncontinue">
                                    <span>Continue</span>
                                </div>
                                <div class="tn-button tn-button-continue" style="background: #f5f5f5 !important; border-color: #e2e2e2 !important; color: #000; margin-top: 20px;">
                                    <span id=>Cancel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    
  <?php echo $footer;?>        
</body>
</html>
