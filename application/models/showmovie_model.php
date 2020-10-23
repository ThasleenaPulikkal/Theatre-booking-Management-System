
<?php
class showmovie_model extends CI_Model

{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
/////////////Fetch movie details from db//////////////////////////////
	  public function movieview()  
      {  
       
        //echo $d;exit();
        $query="select m1.*,l.Language as lang,l.l_id,m2.*,t.* from movie_tbl1 m1 left join movie_tb m2 on m2.Movieid=m1.Movie_id left join languages l on l.l_id=m1.Language left join movie_time_tbl t on t.T_Id=m2.Stime";
         $res=$this->db->query($query);
        //echo $this->db->last_query();exit();
         return $res->result();
         }
         ////////////////Fetch reservation details from db///////////////////////
         public function reserveview() 
         {
             $d=date('d/m/y');
        
             //secho $d;exit()d
             $query="select m1.*,t1.*,l.Language as lang,l.l_id,m2.* from movie_tbl1 m1
            left join languages l on l.l_id=m1.Language left join movie_tb m2 on m2.Movieid=m1.Movie_id left join movie_time_tbl t1 on t1.T_Id=m2.Stime where m2.Sdate='$d' ";
              
            $res=$this->db->query($query);
             
          //echo $this->db->last_query();exit();
       
            return $res->result();

         }
          public function seatview1() 
         {
             $d=date('d/m/y');
             //secho $d;exit();
             $query="select m1.*,m2.Movie_id from movie_tb m1
            left join movie_tbl1 m2 on m1.Movieid=m2.Movie_id where m1.Sdate='$d'";
              
            $res=$this->db->query($query);
             
           // $this->db->last_query();exit();
       
            return $res->result();

         }
         ///////////fetch movie name from db.///////////////////
          public function moviename()
          {   $d=date('d/m/y');
             $query="select  m2.Movie,m1.Sdate from movie_tbl1 m2
            left join movie_tb m1 on m1.Movieid=m2.Movie_id where m1.Sdate='$d' and m1.Stime='6'";
             $res=$this->db->query($query);
             //echo $this->db->last_query();exit();
              return $res->result();
            //echo $this->db->last_query();exit();
          } 

////////delete added movie//////////////////////////
    public function delete_d($id)
    { 
      $this->db->where('Movieid', $id);
        $query=$this->db->delete('movie_tb');
        if($query==true)
        {
          $this->db->where('Movie_id', $id);
        return $this->db->delete('movie_tbl1');
        }
           
    }
    //////////Update movie details////////////////////
    
 public function updateid($id,$images){
  //echo $id;exit();
            $data = array(
            'Movie'=>$this->input->post('moviename'),
            'Language'=>$this->input->post('language'),
             'Image' => $images );
             $this->db->where('Movie_id', $id);
            $qry=$this->db->update('movie_tbl1',$data);
            //$m_id=$this->db->insert_id();
           $data = array(
            //'Movieid'=>$m_id,
             'Stime'=>$this->input->post('stime'),
             'Etime'=>$this->input->post('etime'),
             'Status'=>$this->input->post('status'),
              );
           $this->db->where('Movieid', $id);

            $qry=$this->db->update('movie_tb',$data);

           return true;

}

  function selectid($id){
      $d=date('d/m/y');
             //secho $d;exit();
             $qry="select m1.*,l.Language as lang,l.l_id,l.Language,m2.* from movie_tb m1 
             left join movie_tbl1 m2 on m1.Movieid=m2.Movie_id 
             left join languages l on l.l_id=m2.Language where m2.Movie_id='$id' ";

            $qry = $this->db->query($qry);
           // echo $this->db->last_query();exit();
       
        if($qry->num_rows()>0)
        {
         return $qry->row();
        }

        else
        {
         return array();
        }
    }
   
  //////////////to get seats/////////////////  
 function getseats()
    {
        //$query="select s1.*,b2.Status,b2.Reservation_date,b2.Reservation_Time from booking_tbl b1 left join seat_tbl s1 on s1.S_id=b1.Seat_Id left join book_ticket b2 on b2.B_Id=b1.B_Id order by s1.S_id ";
      $query="select b2.Status,b2.Reservation_date,b2.Reservation_Time,s1.*,b1.Seat_Id from seat_tbl s1 left join  booking_tbl b1 on s1.S_id=b1.Seat_Id left join book_ticket b2 on b2.B_Id=b1.B_Id order by s1.S_id";
        $qry=$this->db->query($query);
        //echo $this->db->last_query();exit();
        $res=$qry->result_array();
        return $res;
    }
  ///////////////code to book ticket///////////////// 

 function bookticket()

 {   
  $d=date('d/m/y');
    $stime=$this->input->post('tm');
    //echo $stime;exit();
     //$rdate=$this->input->post('sdate')
 //echo $stime;exit();
     $tdate=date('m/d/Y');
      $query="select m.Movieid from movie_tb m left join movie_time_tbl t on t.T_Id=m.Stime where m.Sdate='$d'";
      $res=$this->db->query($query);
       //echo $this->db->last_query();
       $result=$res->row();
      $mov=$result->Movieid;
      //echo $mov;exit();
       $data = array(
         'User_name'=>'admin',
         'Movie_id'=>$mov,
        'Ticket_cost'=>$this->input->post('tcost'),

        'Reservation_date'=>$tdate,

        'Reservation_Time'=>$stime,

        'Status'=>'Success'
          );
         $this->db->insert('book_ticket',$data);
        $b_id=$this->db->insert_id();
       // echo $b_id;exit();
        $a=$this->input->post('a1');
       // var_dump($a);exit;
  for($i=0;$i<sizeof($a);$i++) 
   {  
      $data=array(
              'B_Id'=>$b_id,
              'Seat_Id'=>$a[$i],
              'Status'=>'Admin holded'
            );
    
    $this->db->insert('booking_tbl',$data);
       }
        $d=date('m/d/y');
//$query="select b1.B_Id,s1.Seat_Name,b1.User_name,b1.Ticket_cost,b1.Reservation_date,l.Language as lang,l.Language,m1.Movie,t1.S_time from book_ticket b1 left join booking_tbl b2 on b2.B_Id=b1.B_Id left join movie_tbl1 m1 on m1.Movie_id=b1.Movie_id left join languages l on l.l_id=m1.Language left join seat_tbl s1 on s1.S_id=b2.Seat_Id left join movie_tb m2 on m2.Movieid=m1.Movie_id left join movie_time_tbl t1 on t1.T_Id=m2.Stime where  b1.B_Id='$b_id'";
$query="select m1.Movie,l1.Language,b1.B_Id,s1.Seat_Name,b1.User_name,b1.Ticket_cost,b1.Reservation_date,b1.Reservation_Time from book_ticket b1 left join booking_tbl b2 on b1.B_Id=b2.B_Id left join seat_tbl s1 on s1.S_id=b2.Seat_Id left join movie_tbl1 m1 on m1.Movie_id=b1.Movie_id left join languages l1 on l1.l_id=m1.Language where b1.B_Id='$b_id'";
$qry=$this->db->query($query);
//echo $this->db->last_query();exit();

return $qry->result();


//echo $this->db->last_query();exit();
 }
 //////////code to confirm  booking /////////////////////////////////
 function confirmseatdetails()
 {
     
    $b_id=$this->input->post('bid');
    $qry="update booking_tbl set Status='Booked' where Booking_id='$b_id'";
    $qry=$this->db->query($qry);
  

 }
 ////////////////code to take counter tickets////////////
 public function counterticket()
 {
    
     $btn_value=$this->input->post('count');//echo $btn_value;exit();
     $stime=$this->input->post('tm'); //echo $stime;exit();
    // if($stime=="")
    // {
    // }
     if($btn_value=='Hold')
     {
    $a=$this->input->post('a1');
    $cost=$this->input->post('tcost');
      $stime=$this->input->post('tm'); 
      $tdate=date('d/m/y');
      $query="select m.Movieid from movie_tb m left join movie_time_tbl t on t.T_Id=m.Stime where m.Sdate='$tdate' and t.T_Id='$stime'";
      $res=$this->db->query($query);
      $result=$res->row();
      $mov=$result->Movieid;
      //echo $mov;
       $data = array(

       'User_name'=>'admin',
         'Movie_id'=>$mov,
        'Ticket_cost'=>$cost,

        'Reservation_date'=>$tdate,
        'Reservation_Time'=>$this->input->post('tm'),

        'Status'=>'hold'
          );
        $this->db->insert('book_ticket',$data);
        $b_id=$this->db->insert_id();
        
  for($i=0;$i<sizeof($a);$i++) 
   {  
      $data=array(
               'B_Id'=>$b_id,
              'Seat_Id'=>$a[$i],
              'Status'=>' hold'
            );
       $this->db->insert('booking_tbl',$data);
    }
?>

<script>
alert("Admin holded");
window.location="<?php echo base_url().'index.php/addmoviecontrolle/counterdisplay';?>"
</script>
    <?php
  
 }
 else if($btn_value=='Ticket')
 {
  
        $d=date('d/m/y');
    $stime=$this->input->post('tm');
     //$rdate=$this->input->post('sdate')
 //echo $stime;exit();
     $tdate=date('d/m/y');
      $query="select m.Movieid from movie_tb m left join movie_time_tbl t on t.T_Id=m.Stime where m.Sdate='$d'";
      $res=$this->db->query($query);
       //echo $this->db->last_query();
       $result=$res->row();
      $mov=$result->Movieid;
      //echo $mov;exit();
       $data = array(
         'User_name'=>'admin',
         'Movie_id'=>$mov,
        'Ticket_cost'=>$this->input->post('tcost'),

        'Reservation_date'=>$tdate,

        'Reservation_Time'=>$this->input->post('tm'),

        'Status'=>'Success'
          );
         $this->db->insert('book_ticket',$data);
        $b_id=$this->db->insert_id();
       // echo $b_id;exit();
        $a=$this->input->post('a1');
       // var_dump($a);exit;
  for($i=0;$i<sizeof($a);$i++) 
   {  
      $data=array(
              'B_Id'=>$b_id,
              'Seat_Id'=>$a[$i],
              'Status'=>'Counter ticket'
            );
    
    $this->db->insert('booking_tbl',$data);
       }
        $d=date('m/d/Y');
//$query="select b1.B_Id,s1.Seat_Name,b1.User_name,b1.Ticket_cost,b1.Reservation_date,l.Language as lang,l.Language,m1.Movie,t1.S_time from book_ticket b1 left join booking_tbl b2 on b2.B_Id=b1.B_Id left join movie_tbl1 m1 on m1.Movie_id=b1.Movie_id left join languages l on l.l_id=m1.Language left join seat_tbl s1 on s1.S_id=b2.Seat_Id left join movie_tb m2 on m2.Movieid=m1.Movie_id left join movie_time_tbl t1 on t1.T_Id=m2.Stime where  b1.B_Id='$b_id'";
$query="select m1.Movie,l1.Language,b1.B_Id,s1.Seat_Name,b1.User_name,b1.Ticket_cost,b1.Reservation_date,b1.Reservation_Time from book_ticket b1 left join booking_tbl b2 on b1.B_Id=b2.B_Id left join seat_tbl s1 on s1.S_id=b2.Seat_Id left join movie_tbl1 m1 on m1.Movie_id=b1.Movie_id left join languages l1 on l1.l_id=m1.Language where b1.B_Id='$b_id'";
$qry=$this->db->query($query);
//echo $this->db->last_query();exit();

return $qry->result();

 }
 else
 {
  
  $stime=$this->input->post('tm'); 
  $tdate=date('d/m/Y');
  $a=$this->input->post('a1');
  //var_dump($a);exit();
 // print_r(explode("",$a));exit();
  for($i=0;$i<sizeof($a);$i++) 
   {
 //$query="select m.Movieid from movie_tb m left join movie_time_tbl t on t.T_Id=m.Stime where m.Sdate='$tdate' and m.Stime='$stime' and ";
  //$res=$this->db->query($query);
  //echo $this->db->last_query();exit();
  //$result=$res->row();
  //$mov=$result->Movieid;
  $qry="select c1.B_Id from booking_tbl c1 where c1.Seat_Id='$a[$i]'";
     $res=$this->db->query($qry);
     //echo $this->db->last_query();exit();
      $result=$res->row();
      $b_id=$result->B_Id;
    
      $data=array(
              
        'Status'=>'Unholded'
            );
      //$this->db->where('Movie_id',$mov);
      $this->db->where('B_Id', $b_id);
      $this->db->where('Seat_Id',$a[$i]);
      $this->db->update('booking_tbl',$data);
       $data=array(
              
        'Status'=>'Unholded'
            );
        $this->db->where('B_Id', $b_id);
         $this->db->update('book_ticket',$data);

    }
    ?>
     <script>
alert("Unholded");
window.location="<?php echo base_url().'index.php/addmoviecontrolle/counterdisplay';?>"
</script>
    <?php
  
 }
 ///////////////////code to change password////////////////
  function changepasword()
{ $npwd=$this->input->post('npsw'); 

 $cpwd=$this->input->post('cpsw'); 
 //echo $cpwd;
  $opwd=$this->input->post('psw'); 
 
  if($npwd==$cpwd)
  {

   $data = array(
             'Password'=>$this->input->post('npsw')
             
             
                );
              $this->db->where('Password', $opwd);
            $qry=$this->db->update('login_deatails',$data);
             return true;
  }
else
{?>
  <script>

  alert("mismatch");
  </script>
<?php }


}
}
/////////////////////////////////get movie date from movie_time_tbl///////////////////////////////////
 function get_movietime()
{
   $tdate=date('d/m/y');
  //$query="select t1.S_time,t1.T_Id,m1.* from movie_tb m1 left join movie_time_tbl t1 on m1.Stime=t1.T_Id where m1.Sdate='$tdate'";
       $query="select * from movie_time_tbl";       
            $res=$this->db->query($query);
             
           //$this->db->last_query();exit();
       
            return $res->result();

}
 function show_time1()
       {
        $data = array(
              'S_time'=>$this->input->post('Stime'),
              'E_time'=>$this->input->post('Etime'),
               );
             $qry=$this->db->insert('movie_time_tbl',$data);
       }
       function get_movietime1($id)
       {
       $query="select T_Id,S_time,E_time from movie_time_tbl where T_Id=$id";
              
           $qry = $this->db->query($query);
           // echo $this->db->last_query();exit();
       
        if($qry->num_rows()>0)
        {
         return $qry->row();
        }

        else
        {
         return array();
        }
      }
      ////////////////////update movie_time_tbl/////////////////////////////-/
     function update_time1($id)
      {
      $data = array(
            //'Movieid'=>$m_id,
             'S_time'=>$this->input->post('stime'),
             'E_time'=>$this->input->post('etime'),
             
              );
           $this->db->where('T_Id', $id);

            $qry=$this->db->update('movie_time_tbl',$data);

           return true;
         }
           function delete_time1($id)
    {
        $this->db->where('T_Id', $id);
        $query=$this->db->delete('movie_time_tbl');
       return true;
    }
    //get movie cost from table movie_cost_tbl
   function get_movie_cost()
    {
      $query="select * from ticket_cost_tbl";
              
           $qry = $this->db->query($query);
           // echo $this->db->last_query();exit();
            return $qry->result();
       
        
    }
    /////////////////update ticket cost////////////////////////////////////////////////////////////////
   function update_cost1($id,$cost)
    {
      $data = array(
            //'Movieid'=>$m_id,
             
             'Ticket_cost'=>$cost
             
              );
           $this->db->where('Id', $id);

            $qry=$this->db->update('ticket_cost_tbl',$data);

           return true;
    }
    /////////////////get counter ticket cost////////////////////////////////////////////////////////////////////
    public function get_counter_cost()
    {
       $query="select  Ticket_cost from ticket_cost_tbl where Id='3'";
        $res=$this->db->query($query); 
        //echo $this->db->last_query();exit();
        $re=$res->result();
          return $re;
    }
    //get time when clicked
   public function  get_showtime1($st)
   {
    $query="select S_time from movie_time_tbl where T_Id='$st'";
    $res=$this->db->query($query); 
        //echo $this->db->last_query();exit();
        $re=$res->result();
          return $re;
   }
   /////////////////////////cancel ticket function///////////////////////////////////
   public function cancel_ticket()
   {
    
    $query="select b1.*,b2.*,s1.*,m1.*,t.S_time from book_ticket b1 left join booking_tbl b2 on b1.B_Id=b2.B_Id left join movie_time_tbl t on b1.Reservation_Time=t.T_Id left join seat_tbl s1 on s1.S_id=b2.Seat_Id left join movie_tbl1 m1 on m1.Movie_id=b1.Movie_id left join languages l1 on l1.l_id=m1.Language left join movie_time_tbl m3 on b1.Reservation_Time=m3.S_time where b2.Status='User ticket canceled'";
      $qry=$this->db->query($query);
      //echo $this->db->last_query();exit();
      return $qry->result();
  }
}
 ?>