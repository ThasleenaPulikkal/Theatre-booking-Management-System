<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Surabhi movies</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
</head>
    <body>


      <table cellpadding='0' cellspacing='0' align='center' bgcolor='#ffffff' style=' background:#FFFFFF; border:1px solid #e3e3e3; border-radius: 3px; max-width:582px'>


<tbody>

       <tr>


       <td width='580' align='center' style='padding:5px;background-color:#124761'><table border='0' cellpadding='0' cellspacing='0' align='center' style='
    '>



              <tbody>

              <tr>



              <td align='center' valign='top'>


                <a href='#' style='display:block;'>

                <!--<div style='width:100%'><img src='http://nahartravels.com/TM/assets/images/logos_NAHAR.png' border='0' alt='' style='margin:0; display:block; max-width:570px; width:inherit'>-->

                </div></a></td>





              </tr>


          </tbody></table></td>







      </tr>



       <tr>
                    <td style='border:1px solid #124761;'>

                    </td>
                </tr>


      <tr>
        <td width='580' align='center' style='padding:15px;'> <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' style='max-width:540px;'>
          <tbody>
            <tr bgcolor='#ffffff'>
              <td width='540' align='left' style='font-size:14px; color:#333333; font-family: 'Open Sans', Gill Sans, Arial, Helvetica, sans-serif;'>
                <br><br>

                </td>
              </tr>
            </tbody>
          </table></td>
      </tr>


      <tr>
        <td width='580' align='center' style='padding:15px;'><table border='0' cellpadding='0' cellspacing='0' align='center' style='max-width:550px;'>
          <tbody>
           <tr>
            <td width='550' style=' font-weight:bold;  font-size:15px; padding:5px 0px; font-family: 'Open Sans', Gill Sans, Arial, Helvetica, sans-serif; text-align:left; '><div style='text-align:center;'><h3>Reservation Details</h3> </div>
          </tr>
      
        <b>    

                 
              <?php
                    foreach ($proceed as $key => $row)  
                  { ?> 
                      <?php if($key==0){?>
                                <tr>
                                <td><b>Movie:</b><?php echo $row->Movie;?></td></tr>
                                <input type="hidden"  name="bid" value="<?php echo $row->B_Id;?>">
                                <tr><td>
                                <b> Language:</b><?php echo $row->Language;?></td></tr> 
                                <tr>
                                <td>                     
                                <b>Show time:</b><?php echo $row->S_time;?></td></tr>
                                 <tr><td><b>Show date:</b><?php echo $row->Reservation_date;?></td></tr>
                                 <tr><td><b>Totel cost:</b><?php echo $row->Ticket_cost;?></td></tr>
                                 <tr><td>

                                <b> Seat No:</b>
                         <?php }?>
                        
                          <b><?php echo $row->Seat_Name;?></b>
                            <?php }?>
                            
                          
                         
                         </td>

      <tr>
        <td width='580' align='center' style='padding:15px;'> <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' style='max-width:550px;'>
          <tbody>
            <tr bgcolor='#ffffff'>
              <td width='540' align='left' style=' font-size:14px; color:#333333; font-family: 'Open Sans', Gill Sans, Arial, Helvetica, sans-serif;'>
              <br><br>Sincerely<br>
                Team ABC</td>
              </tr>
              <tr>
          <td height='20'></td>
        </tr>

        <tr>
          <td align='center' style=' line-height:13px; font-size:11px; font-family: Helvetica,Arial,sans-serif;     color: #ffffff;
    padding-bottom: 10px;
    padding-top: 10px;
    background-color: #124761;'> <a href='http://ABC Team.com/' target='_blank' style='color:#ffffff; text-decoration:none;'>Team Abc</a></td>
        </tr>
            </tbody>
          </table></td>
  

      </table>





    </td>
    </tr>
    </tbody></table>
</body>
</html>