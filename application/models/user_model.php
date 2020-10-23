
<?php
class user_model extends CI_Model

{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
  ////////////code for sign up///////////////
      public function signupadd()
      {$pwd=$this->input->post('pwd');
        $cpwd=$this->input->post('cpwd');
         if($pwd==$cpwd)
         {


      	 $data = array(
	           'FName'=>$this->input->post('fname'),
	           'LName'=>$this->input->post('lname'),
             'Email'=>$this->input->post('email'),
             'Mobile_no'=>$this->input->post('ph'),
              'Password'=>$this->input->post('pwd'),
              'Confirm_password'=>$this->input->post('cpwd'),
                );
	          $qry=$this->db->insert('signup_tbl',$data);
            return true;
          }
          else
         {?>
                     <script>
                      alert("mismatch");
                      window.location="<?php echo base_url().'index.php/user_controller/user_login';?>";
                      </script>
                    <?php 
                    }
         
      }

     
        public function validate($username,$password)
           {
             $this->db->select("*");
             $this->db->from('signup_tbl');
            $this->db->where('Email',$this->input->post('uname'));
            $this->db->where('Password',$this->input->post('psw'));
            $query=$this->db->get();
           
          if($query->num_rows() >0)

            {
             return $query->result_array();

            }


          else{
              return array();
            }


           }

      
      public function new_launch_slide_articles()
       {
                  // $this->db->select('*');
                  // $this->db->from('movie_tbl1');
                  // $this->db->order_by('Movie_id', 'DESC');
                  //  return  $query = $this->db->get();
        $query="select * from movie_tbl1 order by Movie_id desc";
        $res=$this->db->query($query);//echo $this->db->last_query();exit();
        return $res->result();
       }
       /////code to get movie name///////
       public function moviename()
       {
              $d=date('d/m/y');
             $query="select m1.Movie_id,m1.Movie,m2.Sdate from movie_tbl1 m1 left join movie_tb m2 on m1.Movie_id=m2.Movieid where m2.Sdate >='$d' group by m1.Movie";
         $res=$this->db->query($query);
         //echo $this->db->last_query();exit();
          $re=$res->result();
          return $re;
       }
       //////get show date//////////////
       public function get_showdate()
       {
        $showname=$this->input->post('bid');
           $d=date('d/m/y');
        //echo $showname;exit(); 
        $query="select m2.Movie_id, m2.Movie,m1.Sdate from movie_tbl1 m2
            left join movie_tb m1 on m1.Movieid=m2.Movie_id where  m1.Movieid='$showname' and m1.Sdate>='$d' and m1.Stime='6'";

        $result=$this->db->query($query); 
        //echo $this->db->last_query();exit();
      
        if($result->num_rows()>0){
            $data['getshowdate']= $result->result_array();
            }
          
        else{
            return array();
        }
        return $data;
       }
       ///////code to get movie
       public function booking_details()
       {
        $movie_id=$this->input->post('movie');
        //echo $movie_id;exit();
        
        $query="select  Movie from movie_tbl1 where Movie_id='$movie_id'";
            $res=$this->db->query($query); 
            //echo $this->db->last_query();exit();
             $re=$res->result();
          return $re;
       }
       //get reservation cost
       public function get_reservation_cost()
       {
        $query="select  Ticket_cost from ticket_cost_tbl where Id='2'";
        $res=$this->db->query($query); 
        //echo $this->db->last_query();exit();
        $re=$res->result();
          return $re;
       }
       public function get_showtime()
       {
        $movie_id=$this->input->post('movie');
        $showdate=$this->input->post('sdate');
        $query="select t1.S_time,t1.T_Id from movie_tb m1 left join movie_time_tbl t1 on m1.Stime=t1.T_Id where m1.Movieid='$movie_id' and m1.Sdate='$showdate'";
        $res=$this->db->query($query);
        //echo $this->db->last_query();exit();
         $re=$res->result();
          return $re;
       }

      public function get_seat($d,$day)
       {
        
        //echo $d;echo $day;exit();
        $query="select b2.Status,b2.Reservation_date,b2.Reservation_Time,s1.*,b1.Seat_Id from seat_tbl s1 left join  booking_tbl b1 on s1.S_id=b1.Seat_Id left join book_ticket b2 on b2.B_Id=b1.B_Id order by s1.S_id";
        //$query="select b2.Status,b2.Reservation_date,b2.Reservation_Time,s1.* from  booking_tbl b1 left join book_ticket b2 on b2.B_Id=b1.B_Id left join seat_tbl s1 on s1.S_id=b1.Seat_Id ";
        // $query="select b2.Status,s1.*,b1.Seat_Id,m1.Sdate,m1.Stime from seat_tbl s1 left join  booking_tbl b1 on s1.S_id=b1.Seat_Id left join book_ticket b2 on b2.B_Id=b1.B_Id left join movie_tb m1 on b2.Movie_id=m1.Movieid " ;
        $qry=$this->db->query($query);
        
        //echo $this->db->last_query();exit();
        $res=$qry->result_array();
        return $res;
       }

       public function booking_details1($tid,$sdate)
       {
        $query="select m1.Movie,t1.S_time,Sdate,t1.T_Id,l1.* from movie_tbl1 m1 left join  movie_tb m2 on m1.Movie_Id=m2.Movieid left join movie_time_tbl t1 on m2.Stime=t1.T_Id left join languages l1 on l1.l_id=m1.Language where m2.Sdate='$sdate' and m2.Stime='$tid'";
        $res=$this->db->query($query);
        //echo $this->db->last_query();exit();
        $re=$res->result();
          return $re;
       }
       public function get_showtime1($sdate)
       {
        $query="select t1.S_time,t1.T_Id,m1.Sdate from movie_tb m1 left join movie_time_tbl t1 on m1.Stime=t1.T_Id where  m1.Sdate='$sdate'";
        $res=$this->db->query($query);
        //echo $this->db->last_query();exit();
         $re=$res->result();
          return $re;
       }
       public function bookticket_user()
       {
        $movie=$this->input->post('movie');
        $name=$this->input->post('name');
        $showtime=$this->input->post('stime1');
        $query="select Movie_id from movie_tbl1 where Movie='$movie'";
        $res=$this->db->query($query);
       //echo $this->db->last_query();
       $result=$res->row();
      $mov=$result->Movie_id;
     

      $data = array(
        'User_name'=>'User',
         'Movie_id'=>$mov,
        'Ticket_cost'=>$this->input->post('gtotal'),
         'Reservation_date'=>$this->input->post('sdate'),
         'Reservation_Time'=>$showtime,
          'Status'=>'Success'
          );
      $this->db->insert('book_ticket',$data);
        $b_id=$this->db->insert_id();
        //echo $b_id;exit();
        $a=$this->input->post('a1');
        //var_dump($a);exit;
  for($i=0;$i<sizeof($a);$i++) 
   {  
      $data=array(
              'B_Id'=>$b_id,
              'Seat_Id'=>$a[$i],
              'Status'=>'User reservation'
            );

    
    $this->db->insert('booking_tbl',$data);
}
$query="select m1.Movie,l1.Language,b1.B_Id,s1.Seat_Name,b1.User_name,b1.Ticket_cost,b1.Reservation_date,b1.Reservation_Time,t.S_time from book_ticket b1 left join booking_tbl b2 on b1.B_Id=b2.B_Id left join movie_time_tbl t on b1.Reservation_Time=t.T_Id  left join seat_tbl s1 on s1.S_id=b2.Seat_Id left join movie_tbl1 m1 on m1.Movie_id=b1.Movie_id left join languages l1 on l1.l_id=m1.Language where b1.B_Id='$b_id'";
$qry=$this->db->query($query);
//echo $this->db->last_query();exit();

return $qry->result();


//echo $this->db->last_query();exit();
       

    }
    public function login_details( $username,$password)
    {
       

      $query="select FName,Email from signup_tbl where Email='$username' and Password='$password'";
      $qry=$this->db->query($query);
      //echo $this->db->last_query();exit();
      return $qry->result();
    }
    public function booking_details2()
    {
      $bid=$this->input->post('bid');
      //$query="select b1.*,b2.* from book_ticket b1 left join booking_tbl b2 on b1.B_Id=b2.B_Id where b1.B_Id='$bid' ";
      $query="select b1.*,b2.*,s1.*,m1.Movie_id,m1.Movie,l1.*,t.S_time from book_ticket b1 left join booking_tbl b2 on b1.B_Id=b2.B_Id left join movie_time_tbl t on b1.Reservation_Time=t.T_Id left join seat_tbl s1 on s1.S_id=b2.Seat_Id left join movie_tbl1 m1 on m1.Movie_id=b1.Movie_id left join languages l1 on l1.l_id=m1.Language left join movie_time_tbl m3 on b1.Reservation_Time=m3.S_time where b1.B_Id='$bid'";
      $qry=$this->db->query($query);
      //echo $this->db->last_query();exit();
      return $qry->result();
    }
    //insert contact details into db
    public function contact_us_details()
    {
     $data = array(
        'Name'=>$this->input->post('name'),
         'Mobile'=>$this->input->post('mobile'),
        'Email'=>$this->input->post('email'),
         'Message'=>$this->input->post('message'),
         );
      $this->db->insert('contact_us_tbl',$data);
      return true; 
    }
    //get id from signup_tbl
    public function get_id($email)
    {
      $query="select Id from signup_tbl where Email='$email'";
      $qry=$this->db->query($query);
      //echo $this->db->last_query();exit();
      return $qry->result();
     
    }
    //get profile
    public function get_profile($id)
    {
    
     
     $query="select * from signup_tbl where Id='$id' ";

     $qry=$this->db->query($query);
     //echo $this->db->last_query();exit();
     return $qry->result();

    }

    //update signup tbl
    public function update_signup_tbl()
    {
      
      $id=$this->input->post('id');
      $pwd=$this->input->post('pwd');
        $cpwd=$this->input->post('cpwd');
         if($pwd==$cpwd)
         {
      $data = array(
             'FName'=>$this->input->post('fname'),
             'LName'=>$this->input->post('lname'),
             'Email'=>$this->input->post('email'),
             'Mobile_no'=>$this->input->post('ph'),
              'Password'=>$this->input->post('pwd'),
              'Confirm_password'=>$this->input->post('cpwd'),
                );
                 $this->db->where('Id', $id);

            $qry=$this->db->update('signup_tbl',$data);

           return true;
         }
          else
         {?>
                     <script>
                      alert("mismatch");
                      window.location="<?php echo base_url().'index.php/user_controller/index';?>";
                      </script>
                    <?php 
                    }

    }
    //update table with email id
    public function add_email($username,$bid)
    {
      $data = array(
        'User_name'=>$username,
         
          );
      $this->db->where('B_Id', $bid);

            $qry=$this->db->update('book_ticket',$data);

           return true;

    }
    
    
    //////get email id for cancel tickets/////////////
    public function get_emailid()
    {
      $Id=$this->input->post('id');
      $query="select Email from signup_tbl where Id='$Id'";

     $qry=$this->db->query($query);

       //echo $this->db->last_query();
       $result=$qry->row();
      $username=$result->Email;
     
     //echo $this->db->last_query();exit();
     return $username;

    }

    public function cancel_ticket_model()
    { $bid=$this->input->post('bid');
     $sno=$this->input->post('seat_no');
     $query="select S_id from seat_tbl where Seat_Name='$sno'";
        $res=$this->db->query($query);
       //echo $this->db->last_query();
       $result=$res->row();
      $sid=$result->S_id;
      $query="select * from book_ticket where B_Id='$bid'";
        $res=$this->db->query($query);
         if($res->num_rows()>0)
            {
      $data = array(
        'Status'=>'Succees',
         
          );
       $this->db->where('B_Id', $bid);

            $qry=$this->db->update('book_ticket',$data);
    }
    else
    {
      $data = array(
        'Status'=>'Ticket canceled',
         
          );
    }

      $this->db->where('B_Id', $bid);

            $qry=$this->db->update('book_ticket',$data);
$data = array(
        'Status'=>'User ticket canceled',
         
          );
      $this->db->where('B_Id', $bid);
      $this->db->where('Seat_Id', $sid);

            $qry=$this->db->update('booking_tbl',$data);

          return true;
     
    }
  }
  ?>