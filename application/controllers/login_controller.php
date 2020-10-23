
<?php
class Login_controller extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
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
      
	 $this->load->view('adminpanel/login.php');
	}
	   public function user_login_process() {
          
  //$this->load->view('add-service', $data);



// $this->form_validation->set_rules('Username', 'uname', 'trim|required|xss_clean');
// $this->form_validation->set_rules('Password', 'psw', 'trim|required|xss_clean');

// if ($this->form_validation->run() == TRUE) {
//  echo "dfgdfgd";exit;
 
 $data = array(
      'Username' => $this->input->post('uname'),
      'Password' => $this->input->post('psw')
      );
   $result = $this->Login_model->login($data);

if ($result == TRUE) {
//echo "dfgdfgd";exit();
$username = $this->input->post('uname');
$result = $this->Login_model->read_user_information($username);
if ($result != false) {
$session_data = array(
//'username' => $result[0]->name,
'Username' => $result[0]->Username,
);
// Add user data in session
//$this->session->set_userdata('logged_in', $session_data);
$data=$this->set_menu();
$this->select();
}
} else {
$data = array(
'error_message' => 'Invalid Username or Password'
);?>
<script>
alert("Invalid username or password");
</script><?php
$this->load->view('adminpanel/login.php');
}
// }else{
//  echo "hai";
  
// }
 // $this->load->view('select_view');
}

 public function select()
      {
    $data=$this->set_menu();
     //$data['s']=$this->Login_model->validate();
      $this->load->view('adminpanel/add-service',$data);

       //s$this->load->view('adminpanel/movie-add.php');
     // $this->load->view('adminpanel/change-password');
      //$this->load->view('adminpanel/footer');
      }
function logout()
{
  $this->session->sess_destroy();
   redirect('login_controller/index');
}


}
?>