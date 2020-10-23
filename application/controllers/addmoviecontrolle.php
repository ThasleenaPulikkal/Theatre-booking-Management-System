
<?php
class addmoviecontrolle extends CI_Controller
{
 public function __construct()
        {      parent::__construct();
               $this->load->helper('form');
                $this->load->helper('url');
                $this->load->library('upload');
                $this->load->library('session');
                $this->load->model('movieaddmodel');
                 $this->load->model('showmovie_model');
                 $this->load->model('Login_model');
                 $this->load->model('user_model');
                  $user=$this->session->userdata('username');
                 //echo $user;exit();
        if(!($user)){
            redirect('login_controller/index');
        }
                           
                }
      public function index()
      {
       $this->showmovie_model->autocancel();
      } 

	    public function set_menu()
	    {
	   	  $data['header']=$this->load->view('adminpanel/template/header','',true);
        $data['nav']=$this->load->view('adminpanel/template/nav','',true);
        $data['footer']=$this->load->view('adminpanel/template/footer','',true);
        return $data;
	    }
      /////////check show date and language already in db////////////

    
      public function addmovie()


      {
          $data=$this->set_menu();  
          $query = $this->movieaddmodel->getlanguages();
           $data['records'] = $query;
           $data['s']=$this->showmovie_model->get_movietime();  
           //$q = $this->movieaddmodel->getstatus();
          
          
           // $data['t'] = $q;
           $this->load->view('adminpanel/movie-add',$data);
          }
          ////////upload movie details/////////////////////////////      
  
      function do_upload()
{
              $files = $_FILES;
              $count = count($_FILES['userfile']['name']);
              $new_file=time().$files['userfile']['name'];
               $new_filename = str_replace(" ","_", $new_file);//echo $new_filename;exit();
               $_FILES['userfile']['name']= $new_filename;//echo  $_FILES['userfile']['name'];exit();
              
                $_FILES['userfile']['type']= $files['userfile']['type'];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'];
                $_FILES['userfile']['error']= $files['userfile']['error'];
                $_FILES['userfile']['size']= $files['userfile']['size'];
                $config['upload_path'] =  './uploads/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2000000';
               // $config['remove_spaces'] = true;
               // $config['overwrite'] = false;
                // $config['max_width'] = '200';
                // $config['max_height'] = '200';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('userfile');
                $fileName = $_FILES['userfile']['name'];
                  $images = $new_filename;
                    $result=$this->movieaddmodel->aboutmovie($images);
         if($result){
           ?>
           <script>
           alert("successfully uploaded");

            window.location= '<?php echo base_url();?>index.php/addmoviecontrolle/addmovie?success';

            </script>
         
           <?php}
           else
            {?>
           <script>

            window.location= '<?php echo base_url();?>index.php/addmoviecontrolle/addmovie?success';

            </script>
          <?php }

         
       
       

}
////////////////////view movie details//////////////////////
  public function select()
  {
    $data=$this->set_menu();
    $data['h']=$this->showmovie_model->movieview();
    $this->load->view('adminpanel/showdetails',$data);
     //$this->load->view('adminpanel/reservation_view',$data);
  
  }
  ////////////////delete movie details///////////////////////////
  
  public function delete($id) 
       {  
        
           $this->showmovie_model->delete_d($id); 
           //redirect('addmoviecontrolle/select');
       }
       ///////////////////Update movie dtails///////////////////////
       public function updateid_1() 
       
        {

          
           $files = $_FILES;
              $count = count($_FILES['userfile']['name']);
               $new_file=time().$files['userfile']['name'];
               $new_filename = str_replace(" ","_", $new_file);//echo $new_filename;exit();
               $_FILES['userfile']['name']= $new_filename;//echo  $_FILES['userfile']['name'];exit();
              
                $_FILES['userfile']['type']= $files['userfile']['type'];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'];
                $_FILES['userfile']['error']= $files['userfile']['error'];
                $_FILES['userfile']['size']= $files['userfile']['size'];
                $config['upload_path'] =  './uploads/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
              //  $config['max_size'] = '2000000';
              //  $config['remove_spaces'] = false;
               // $config['overwrite'] = false;
                // $config['max_width'] = '200';
                // $config['max_height'] = '200';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload();
                $fileName = $_FILES['userfile']['name'];
               
                    $images = $new_filename;
                    $id= $this->input->post('no');
        //echo $id;exit();
        $this->showmovie_model->updateid($id,$images);
        ?>
       <script>
        alert("your data has been updated succesfully");
        window.location="<?php echo base_url().'index.php/addmoviecontrolle/select';?>";
        </script><?php
      }

public function show_edit_id($id) {

         // echo $id;exit();
          $data=$this->set_menu();
           $data['language']=$this->movieaddmodel->getlanguages();
           $data['time']=$this->showmovie_model->gettime();
          
           $data['movie_details']=$this->showmovie_model->selectid($id);
            $this->load->view('adminpanel/NewMovie_edit.php',$data);

    }
    ////////////reservation/////////////////
    public function reserve()
    {
       $data=$this->set_menu();
       $data['s']=$this->showmovie_model->get_movietime();
        $data['j']=$this->showmovie_model->reserveview();
        $data['r'] = $this->showmovie_model->getseats();
        //$data['s'] = $this->showmovie_model->get_reserved_seats();
         $data['m']=$this->showmovie_model->moviename();
           
           
       $this->load->view('adminpanel/reservation_view',$data);
  } 
  /////////////view details after reservation//////////////////////////
  public function seatview($as)
  {
    //echo $as ;exit();
     $data=$this->set_menu();
     $data['k']=$this->showmovie_model->seatview1();
     $this->load->view('adminpanel/seat_view',$data);
  } 
  ///////////////////counter ticket////////////////
  public function holdseat()
  {
    
 //     $a=$this->input->post('a1');
 // var_dump($a) ;exit();
    $data=$this->set_menu();
        $query=$this->showmovie_model->bookticket();//echo $m_id;exit();
        $data['proceed']=$query;
        //if($query)
        //{
          //echo $m_id;exit();
         // $sid=$m_id;//echo $sid;exit();
          //$qry=$this->showmovie_model->get_movie_details();
         $this->load->view('adminpanel/seat_view',$data);
        //} 
       
            
      //}
  }
   public function confirmseat()
   {
    //$data=$this->set_menu();
    // $data['s']=$this->showmovie_model->confirmseatdetails();
    $this->showmovie_model->confirmseatdetails();

   }
   public function counterdisplay()
   {
     $data=$this->set_menu();
       $data['j']=$this->showmovie_model->reserveview();
        $data['r'] = $this->showmovie_model->getseats();
         $data['m']=$this->showmovie_model->moviename();

       $this->load->view('adminpanel/counter_view',$data);
   }
   public function counter()
   {
$a=$this->input->post('a1');
//var_dump($a);exit();
      $data=$this->set_menu();
      //$a=$this->input->post('count');echo $a;exit();
      $data['c']=$this->showmovie_model->counterticket();
      $this->load->view('adminpanel/counterticket_view',$data);
}
///////////////code to add show time////////////////
   
 public function addshow_time()
       {
        $data=$this->set_menu();
         $this->load->view('adminpanel/showtime_view',$data);
       }
       public function show_time()
        {
            $query=$this->showmovie_model->show_time1();
          if($query==true)
            ?>
            <script type="text/javascript">
              alert("Movie time successfully added");
              window.location="<?php echo base_url().'index.php/addmoviecontrolle/time_view';?>";
            </script>
            <?php
        }
//add ticket cost/////////////////////
        public function ticketcost()
        {
           $data=$this->set_menu();
            $data['c']=$this->showmovie_model->get_movie_cost();
         $this->load->view('adminpanel/ticketcost_view',$data);
        }
        public function time_view(){
          $data=$this->set_menu();
          $data['h']=$this->showmovie_model->get_movietime();
         $this->load->view('adminpanel/addedtime_view',$data);

        }
        //for Editing movie time///////////////////
        public function edit_time($id)
        {
            $data=$this->set_menu();
           $data['show_time']=$this->showmovie_model->get_movietime1($id);
            $this->load->view('adminpanel/time_edit.php',$data);

        }
        public function update_time()
        {$id= $this->input->post('no');

        $this->showmovie_model->update_time1($id);
        ?>
       <script>
        alert("your data has been updated succesfully");
        window.location="<?php echo base_url().'index.php/addmoviecontrolle/time_view';?>";
        </script><?php
        }
        public function delete_time($id) 
       {  
           $this->showmovie_model->delete_time1($id); 
           redirect('addmoviecontrolle/time_view');
       }
       //edit cost of ticket///////////////////////
       public function edit_cost()
       {
         $data=$this->set_menu();
          $data['cost']=$this->showmovie_model->get_movie_cost($id);
            $this->load->view('adminpanel/cost_edit.php',$data);
       }
        public function delete_cost()
        {

        }
        public function update_cost()
        {
          $id= $this->input->post('id');
          $cost= $this->input->post('new_type_name');

          $result=$this->showmovie_model->update_cost1($id,$cost);
          // var_dump($res);exit();
           if($result){
            
           exit(json_encode(array('status'=>true, 'data'=> $result)));
           }

           else{
           exit(json_encode(array('status'=>false)));

              }
  
    }
    //////////////code to signout/////////////////////
    public function signout()
    {
      $this->load->view('adminpanel/login.php');
    }
    //switch seats of admin
    public function switch_seats_reservation($tid)
       {
        $st=$tid;
       $day= date('m/d/Y');
       $data=$this->set_menu();
       //$date['d']= $day;
       $data['tid']=$tid;
       //$data['t']=$this->user_model->get_showtime1($day);
       //$data['b']=$this->user_model->booking_details1($tid,$day); 
       //$data['r']=$this->user_model->get_seat($tid,$day);
       //$data['rc']=$this->user_model->get_reservation_cost(); 
      
        $data['st']=$this->showmovie_model->get_showtime1($st);
        $data['s']=$this->showmovie_model->get_movietime();
        $data['j']=$this->showmovie_model->reserveview();
        $data['r'] = $this->showmovie_model->getseats();
        $data['rc']=$this->user_model->get_reservation_cost(); 
        //$data['s'] = $this->showmovie_model->get_reserved_seats();
         $data['m']=$this->showmovie_model->moviename();
           
      $this->load->view('adminpanel/reservation_view1.php',$data); 
       }
       //switch seat in counter ticket view
       public function switch_seats_counter($tid)
       {
          $st=$tid;
          $data=$this->set_menu();
          $data['tid']=$tid;
           $data['st']=$this->showmovie_model->get_showtime1($st);
          $data['s']=$this->showmovie_model->get_movietime();
        $data['j']=$this->showmovie_model->reserveview();
        $data['r'] = $this->showmovie_model->getseats();
        $data['rc']=$this->showmovie_model->get_counter_cost(); 
        //$data['s'] = $this->showmovie_model->get_reserved_seats();
         $data['m']=$this->showmovie_model->moviename();
           
      $this->load->view('adminpanel/counter_view1.php',$data);

       }
       //reservation proceed view
       public function Reservation_proceed()
       {
         $data=$this->set_menu();
         $data['proceed']=$this->user_model->booking_details2();
          $this->load->view('adminpanel/print_view.php',$data);
       }
       ////////////////////change password///////////////////////////////////
  public function changepassword()
   {
     $data=$this->set_menu();
    
     $this->load->view('adminpanel/change-password.php',$data);
      
   }
   public function checkpassword()
   {
    
      $this->Login_model->changepasword();

   }
   public function pssredirect()
   {
     $data=$this->set_menu();
    
     $this->load->view('adminpanel/dashboard',$data);

   }
   ///////////////////function for canceled tickets//////////////
   public function canceled_tickets()
   {
    $data=$this->set_menu();
         $data['ct']=$this->showmovie_model->cancel_ticket();
         $this->load->view('adminpanel/canceled_tickets.php',$data);
    
   }
   ////////////////////////////////booking details//////////////////////
    public function booking_detailss()
   {
    $data=$this->set_menu();
         $data['ct']=$this->showmovie_model->booking();
         $this->load->view('adminpanel/booking_details.php',$data);
    
   }
   ////////////////function for payement admin side/////////////////////
   public function payement()
   {
    $data=$this->set_menu();
          
         $this->load->view('adminpanel/payement.php',$data);
         
   }
   public function pay()
   {
    $query=$this->showmovie_model->payement_ticket();
         if($query==true)
         {
          ?>
          <script type="text/javascript">
            alert("Successfully paid");
            window.location="<?php echo base_url().'index.php/addmoviecontrolle/payement';?>";
          </script>
         <?php }
   }
   ///////////////////Auto cancelation of ticket///////////////////
  
    
    
  

   
  }

?>
