<html lang="en">
<head>
  <title>Surabhi cinimas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <style>

.clr_bx{height: 25px;background-color: #000}

  @media print{

.clear{clear: both;}
.clr_bx{height: 25px;margin-top: 45px}

}


    @media print {

          p.screenname {
            margin: 0;
            padding: 10px 0px 0px 0px;
            line-height: 0;
        }
        .clear{clear: both;}
        .bdetails{
            display: none
        }
        body > *:not(#tktprint) {
          display: none;
             }
             .prntcancel{
            display: none;
        }
        .printthis{
            display: none;
        }
        .user_wish{
         display: none;
        }
        

        .mailn_body {
            height: auto;
            width: 100%;
            margin-top: -50px;
            float: left;
        }

        

        .clr_bx {
            height: 50px;
            width: 100%;
            background-color: black !important;
            margin: 0 0 12px;
           
        }

        .modal-footer, .modal-header {

            border: none;
        }

    }

    span.date {
        font-size: 18px;
    }

    #clockdiv {
        font-family: sans-serif;
        color: #fff;
        display: inline-block;
        font-weight: 100;
        text-align: center;
        font-size: 30px;
    }

    #clockdiv > div {
        padding: 10px;
        border-radius: 3px;
        background: #00BF96;
        display: inline-block;
    }

    #clockdiv div > span {
        padding: 15px;
        border-radius: 3px;
        background: #00816A;
        display: inline-block;
    }

    .smalltext {
        padding-top: 5px;
        font-size: 16px;
    }

    .wrapper.ticket_detai12 {
        width: 100%;
    }

    table {
        width: 100%;
        border-collapse: collapse;

    }

    th, td {
        border: 1px solid;
        padding: 5px;
        /*line-height: 5px;*/
        text-align: center;
        /* padding: 10px 0;*/
    }

    .wrapper_inner_body {

    }

    .logo {
        width: 100%;
        text-align: center;
        margin-top: 15%;
    }

    

    .modal-dialog {
        width: 317px !important;
        margin: 30px auto;
    }

    .mailn_body {
        height: auto;
        width: 100%;
        margin-bottom: 50px;
        float: left;
    }

   
   

    .brcd {
        width: 100%;
        float: left;

        /*height: 60px;*/
    }

    .brcd img {
        height: 45px;
        width: 10pc;
        display: none;
        margin: 0 0px 0 22%;
    }

    .tckt_no {
        text-align: center;
        font-size: 12px;
        line-height: 23px;
    }

    p.flm_nme {
        width: 100%;
        float: left;
        font-size: 20px;
        font-weight: 600;
        text-align: center;
    }

    .venue {
        width: 90%;
        margin: 0 14px 10px;
    }

    span.mnthyear {
        font-size: 18px;
    }

    rowspan

    =
    "2"
    {
        font-size: 20px
    ;
    }
    td.day {
        height: 40px;
        font-size: 20px;
        padding: 0;
        text-align: center;
        line-height: 5px;
        padding-top: 10px;
    }

    td.time_bx {
        text-align: center;
        /*line-height: 13px;*/
        font-weight: 600;
        font-size: 35px;
        /*padding: 15px;*/
    }

    span.time {
        font-size: 16px;
    }

</style>

</head>
<?php echo $nav1 ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php 
foreach ($ud as $row) {?>
<p id="user_wish">
Hi
<?php echo $row->FName;?>
</p>
<?php }?>

 <button  type="button" class="bdetails" data-toggle="modal" data-target="#mymodals" id="tkt_submit"  name="submit">
                             click here for Booking Details</button>

               

<!-- Modal-->
 


<div class="modal fade" id="mymodals" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="overflow: hidden">
            <!--            <button type="button" class="close" data-dismiss="modal"></button>-->
            <input type="button" class="btn btn-primary pull-right printthis" value="Print Now" id="btnPrint"
                   onclick="printDiv('tktprint');"
                   style="background-color: #8c42af;width: 81px; height: 40px;margin-top:-14px ;">

            <div class="wrapper_inner_body" id="tktprint">
                <div id="print" style="border-bottome:1px solid;">


                    <div class="logo">
                        <!--<img src="surabhi-logo.png">-->
                        <h2 style="line-height:18px;    font-size: 25px;"><b>Surabhi Cinemas</b><br>
                        <div class="clear"></div><span
                                style="font-size:13px;">Ramanatukara,Kozhikode(Dt),Kerala</span><br>  <div class="clear"></div> <span
                                style="font-size:13px;">Phone: 7510939495</span></h2>
                    </div>
                    <div class="clear"></div>
                   

                        <div class="clr_bx" style="height: 25px;">
                         <div class="clear"></div>
                        <p
                                style="color: #fff; text-align: center; font-size: 16px; font-weight: bold;clear: both;float: none;margin-top: 10px">Reservation
                            Slip</p>
                            <div class="clear"></div>
                            </div>
                        <div class="brcd">
                            <img src="<?php echo base_url();?>tickets/barcode.png">
                             <?php
                              foreach ($proceed as $key => $row)

                             {  ?> 
                      <?php if($key==0){?>
                       <div class="clear"></div>
                            <p class="tckt_no"> Ticket No: <span><b><?php echo $row->Id;?>
                            <span class="screencode"></span>-<span
                                    class="ticketid"></span></b></span></p>
                        </div>

                        <p style="text-align: center;font-size: 20px;    font-weight: 600;"><span
                                class="flm_nme"> </span><?php echo $row->Movie;?> <span style="font-size:10px;"
                                                               class="lang langus spnmlylm"></span></p><br>

                        <!--<p class="screen_name"
                           style="text-align: center;font-size: 14px; font-weight: 200;margin-top:-27px"></p>!-->

                        <table class="venue">
                            <tr>
                                <th rowspan="2"><p>
                                  Show date<br>
                                  <?php echo $row->Reservation_date;?> 
                                </th>
                                <th>
                                
                                    <p class="screenname" style="font_size:18px;font_weight:400" m>Seat Name </p><br>

                                    <!--<span class="scrnnames" style="font-size: 14px;"></span>!-->

                                </th>
                            </tr>
                            <tr>
                             <?php }?> 
                                <td class="time_bx seatno_clas">
                                    <?php echo $row->Seat_Name;?>
                                    </td>
                                     <?php }?> 
                                
                            </tr>
                        </table>
                        <?php
                         foreach ($proceed as $key => $row)

                             {  ?> 
                      <?php if($key==0){?>

                        <table class="venue" style="border:none; margin-bottom: 0;">
                            <tr style="border:none;">
                                <th style="border:none;padding: 0;">Bookin ID</th>
                                <th style="border:none;padding: 0;">Show Time</th>
                                <th style="border:none;padding: 0;">Amount</th>
                            </tr>
                            <tr style="    font-size: 18px;">
                                <td style="padding: 0;font-size: 18px;font-weight: 600;" class="bkgid">SRB-<?php echo $row->B_Id;?> </td>
                                <td style="padding: 0;font-size: 18px;font-weight: 600;" class="showtime"><?php echo $row->S_time;?></td>
                                <td style="padding: 0;font-size: 17px;font-weight: 600;"><span>Rs.</span><span
                                        class="per_ticket"><?php echo $row->Ticket_cost;?></span></td>
                            </tr>
                           
                             <?php }?>
                             <?php }?>
                        </table>
                        <p style="padding: 3px 16px;margin: 0; line-height: 15px;">NB: Please convert this slip as
                            ticket before entering to the theatre</p>
 <div class="mailn_body">
                    </div>
                    <button type="button" class="btn btn-default pnthd pull-right prntcancel" id="close_prints"
                            data-dismiss="modal">Close
                    </button>
                </div>
            </div>

        </div>

    </div>
</div>

</div>

   <script>
    $(document).ready(function () {
           $('.prntcancel ').click(function () {
            location.reload();
        })

    });
</script>
   <script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
       document.body.innerHTML = originalContents;
    }
</script>                
</body>
</html>