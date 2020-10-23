<?php
class admin extends CI_Controller
{
 		public function __construct()
        {      parent::__construct();
               $this->load->helper('form');
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('Login_model');
                           
          }
		public function set_menu()
	    {
	   	  $data['header']=$this->load->view('adminpanel/template/header','',true);
          $data['nav']=$this->load->view('adminpanel/template/nav','',true);
          $data['footer']=$this->load->view('adminpanel/template/footer','',true);
          return $data;
	    }
	    public function index()
	    {
	 	$data=$this->set_menu();
	 	 //$data['s']=$this->Login_model->validate();
	    $this->load->view('adminpanel/add-service',$data);

	     //s$this->load->view('adminpanel/movie-add.php');
	   // $this->load->view('adminpanel/change-password');
	    //$this->load->view('adminpanel/footer');
	    }
	    public function loginuser()
        {

    $username=$this->input->post('uname');
    $password=$this->input->post('psw');
    //$this->load->model('loginmodel');
    $result=$this->Login_model->validate($username,$password);
    if($result==TRUE)
    {
    $session_array = array();
    $session_array = array(
    'Id' => $result[0]['Id'],
    'Username'=> $result[0]['Username'],
    'Password'=> $result[0]['Password'],
    'login' =>true);
    $this->session->set_userdata('logged_in_admin',$session_array);
    redirect('admin/Login');
    $this->load->view("admin/add-service");
    }
    else{
    ?>
    <script language="javascript" type="text/javascript">
    alert('Make sure that password or username typed correctly');
    window.location = "<?php echo site_url().'/adminpanel//add-service' ?>";
    </script>
    <?php


}
        } 
	  public function signout()
	  {
	   $this->load->view('adminpanel/login.php');
	  } 
}

?>