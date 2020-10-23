
<?php
class user_controller extends CI_Controller
{
        public function __construct()
        {      parent::__construct();
               $this->load->helper('form');
                $this->load->helper('url');
                $this->load->database();
                 $this->load->model('user_model');
                  $this->load->model('showmovie_model');
                 $this->load->library('form_validation');
                  $this->load->library("pagination");
                  $this->load->library('session');
                           
          }
        public function set_menu()
        {
          $data['m']=$this->user_model->moviename();
          $data['header']=$this->load->view('user/template/header','',true);
          $data['nav']=$this->load->view('user/template/nav',$data,true);
           $data['nav1']=$this->load->view('user/template/nav1',$data,true);
          $data['footer']=$this->load->view('user/template/footer','',true);
          return $data;
        }
        public function index()
        {
        $data=$this->set_menu();
       $data['slider']=$this->user_model->new_launch_slide_articles();
         $data['m']=$this->user_model->moviename();
          //$this->load->view('user/template/nav',$data);
          $this->load->view('user/user_view',$data);
         
        }
       ///////////////code to user signup////////////////
        public function signup()
        {
           $result=$this->user_model->signupadd();
           if($result==true){
           ?>
           <script>
           alert("successfully created");
            window.location= '<?php echo base_url();?>index.php/user_controller/index?success';

            </script>
            <?php
            } 
        }
        /////////////user login/////////////////
        public function user_login()
        {
           $data=$this->set_menu();
        $this->load->view('user/userlogin_view',$data);
         
          
        }
        public function loginuser()
        {

        $data=$this->set_menu();
$bid=$this->input->post('bid');
    $username=$this->input->post('uname');
    $password=$this->input->post('psw');

    //$this->load->model('loginmodel');
    $result=$this->user_model->validate($username,$password);
    if($result==TRUE)
    {
    $session_array = array();
    $session_array = array(
    'Id' => $result[0]['Id'],
    'Username'=> $result[0]['Email'],
    'Password'=> $result[0]['Password'],
    'login' =>true);
    $this->session->set_userdata('logged_in_admin',$session_array);
    
    //$data['username'] = $session_data['Email'];

    //redirect('user/logged_view2.php');
     
    // redirect('user/logged_view');
    $customermails=$username;
          //echo $customermails;exit();
        //$results['customermail']=$customermails;
         //$qry=$this->Empservice_Model->insertservice($customermails);
        //$results['psw']=$result;
          $subject="Movie ticket Reservation details";
            $title=$subject;
            $subject=$title;
            $data['proceed']=$this->user_model->booking_details2();
            $reply_message=$this->load->view('user/customer_mail', $data,TRUE);
            $this->load->library('email');
            $config['protocol'] = "smtp";
            $config['smtp_host'] = "ssl://smtp.gmail.com";
            $config['smtp_port'] = "465";
            $config['smtp_user'] = 'techcybaze@gmail.com';
            $config['smtp_pass'] = 'cyb@ze-7';
            $config['charset'] = "utf-8";
            $config['mailtype'] = "html";
            $config['newline'] = "\r\n";
        // foreach($this->input->post('selectbox') as $selected){

              $this->email->initialize($config);
            $this->email->from('thasleenapulikkal@gmail.com', 'Team ABC');
            $this->email->to($customermails);
            $this->email->reply_to('no-replay@gmail.com', 'OTP Verification');
            $this->email->subject($title);
            $this->email->message($reply_message);
             $send_mails=$this->email->send();
       //  }


          if($send_mails){
              
              $data['ud']=$this->user_model->login_details( $username,$password);
             $data['proceed']=$this->user_model->booking_details2();
             $query=$this->user_model->add_email($username,$bid);
             $this->load->view('user/logged_view1',$data);
         }   
        
     else{
      
                exit(json_encode(array("status"=>FALSE,"reason"=>'Database Error')));
          }
    }
    
    else{
    ?>
    <script language="javascript" type="text/javascript">
    anoty({text:data.reason, type:'error', layout:'top', timeout:1000});

                    setTimeout(function () {

                        window.location.reload();

                    }, 1000);
    </script>
    <?php
}
        }
       
 public function bookshow()
 {
  $data=$this->set_menu();
  $data['d']=$this->input->post('sdate');
  $data['t']=$this->user_model->get_showtime();
  $data['b']=$this->user_model->booking_details(); 
  $data['r']=$this->showmovie_model->getseats();
  $data['rc']=$this->user_model->get_reservation_cost(); 
  $this->load->view('user/booking_view',$data);
}
 public function getshowdate()
 {
  
    $query=$this->user_model->get_showdate();
        if($query){
            exit(json_encode(array(

                'status'=>true,
                'data'=>$query
            )));
        }
        else{
            exit(json_encode(array(
                'status'=>false,
                'data'=>"NO data found"
            )));
        } 
        }
        /////////////code for about view//////////////// 
function about()
       {
        $data=$this->set_menu();
        $this->load->view('user/about.php',$data);
       }
       //////code for help view//////////////
       function help()
       {
      $data=$this->set_menu(); 
  $this->load->view('user/book_copy.php',$data);
       
       }
       ////code for switch user according to time//////////////
       public function switch_seats($tid,$sdate,$a,$b)
       {
        $sd=$sdate;
       $day= $sd."/".$a."/".$b;
       $data=$this->set_menu();
       //$date['d']= $day;
       $data['tid']=$tid;
       $data['sd']=$day;
       $data['t']=$this->user_model->get_showtime1($day);
       $data['b']=$this->user_model->booking_details1($tid,$day); 
       $data['r']=$this->user_model->get_seat($tid,$day);
       $data['rc']=$this->user_model->get_reservation_cost(); 
      $this->load->view('user/booking_view1',$data); 
       }
       ///////code for booking corfirmation/////////////////////
       function cofirmation_details()
       {
        $data=$this->set_menu();

      $query=$this->user_model->bookticket_user();
        $data['proceed']=$query;
        $this->load->view('user/booking_view3',$data);
        
        
       }
        
   /////////////code for login while boooking/////////////////  

 public function loginuser1()
        {
    $data=$this->set_menu();
    $username=$this->input->post('uname');
    $password=$this->input->post('psw');
    //$this->load->model('loginmodel');
    $result=$this->user_model->validate($username,$password);
    if($result==TRUE)
    {
    $session_array = array();
    $session_array = array(
    'Id' => $result[0]['Id'],
    'Username'=> $result[0]['Email'],
    'Password'=> $result[0]['Password'],
    'login' =>true);
    $this->session->set_userdata('logged_in_admin',$session_array);
    //redirect('user_controller/loginuser1'); 
     
    // redirect('user/logged_view');
     $data['email']=$username;
      $data['id']=$this->user_model->get_id($username);

    $this->load->view('user/logged_view2.php',$data);
    }
    else{
    ?>
    <script language="javascript" type="text/javascript">
    alert('Make sure that password or username typed correctly');
    window.location = "<?php echo base_url();?>index.php/user_controller/index";
    </script>
    <?php
  }
        }
        /////////////////code for contact us view////////////////
      public function contact_us()
      {
        $result=$this->user_model->contact_us_details(); 
         if($result)
         {
           ?>
           <script>
            window.location= '<?php echo base_url();?>index.php/user_controller/about?success';

            </script>
          
         <?php
       }
       }  
       /////////////////////function to update profile////////////////////////////
       public function update($Id)
       {
        $data=$this->set_menu();
         $data['p']=$this->user_model->get_profile($Id);
        
        $this->load->view('user/update_profile.php',$data);

    
       }
       ////////////////////update entries of signup table////////////////////////////
       public function upadate_signup()
       {
        $result=$this->user_model->update_signup_tbl();
         if($result){
           ?>
           <script>
           alert("successfully updated");
            window.location= "<?php echo base_url();?>index.php/user_controller/index?success";

            </script>
           <?php
         
       }
       
         }
       /////////////////////////display cancel ticket view/////////////////////////////////////
         public function cancel_ticket($Id)
         {
          $data=$this->set_menu();
           
            $data['Id']=$Id;
            
          $this->load->view('user/cancel_ticket_view.php',$data);
          //$data['c']=$this->user_model->cancel_ticket_model();
         }
         public function cancel_ticket1()
         {
          $data['e']=$this->user_model->get_emailid();

          $q=$this->user_model->cancel_ticket_model();
          if($q==true)

          {
         $customermails=$data['e'];
          //echo $customermails;exit();
        //$results['customermail']=$customermails;
         //$qry=$this->Empservice_Model->insertservice($customermails);
        //$results['psw']=$result;
          $subject="Movie ticket Cancelation Confirmation";
            $title=$subject;
            $subject=$title;
            //$data['proceed']=$this->user_model->booking_details2();
            $reply_message=$this->load->view('user/customer_mail_cancelation', $data,TRUE);
            $this->load->library('email');
            $config['protocol'] = "smtp";
            $config['smtp_host'] = "ssl://smtp.gmail.com";
            $config['smtp_port'] = "465";
            $config['smtp_user'] = 'techcybaze@gmail.com';
            $config['smtp_pass'] = 'cyb@ze-7';
            $config['charset'] = "utf-8";
            $config['mailtype'] = "html";
            $config['newline'] = "\r\n";
        // foreach($this->input->post('selectbox') as $selected){

              $this->email->initialize($config);
            $this->email->from('thasleenapulikkal@gmail.com', 'Team ABC');
            $this->email->to($customermails);
            $this->email->reply_to('no-replay@gmail.com', 'OTP Verification');
            $this->email->subject($title);
            $this->email->message($reply_message);
             $send_mails=$this->email->send();
            ?><script>
            alert("Your ticket is successfully canceled");
            window.location= '<?php echo base_url();?>index.php/user_controller/index?success';
            </script>
           
         <?php }
        

         
         }
         /////////////////////////print tickets from user account//////////////////////////
         public function printticket()
         {
          $data=$this->set_menu();
          $this->load->view('user/print_ticket_user_account.php',$data);
          //$data['c']=$this->user_model->cancel_ticket_model();
         } 
         public function print_ticket_user()
         {   $data=$this->set_menu();
            $data['proceed']=$this->user_model->booking_details2();
            $this->load->view('user/print_ticket_view.php',$data);
         }
         

        
       
      }?>