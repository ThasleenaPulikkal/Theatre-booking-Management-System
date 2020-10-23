///////////////controller for change admin password///////////////
<?php
class changepassword extends CI_Controller
{
 public function __construct()
        {      parent::__construct();
               $this->load->helper('form');
                $this->load->helper('url');
          }

	    public function index()
	    {
	 
	    //$this->load->view('adminpanel/add-service');
	    $this->load->view('adminpanel/change-password');
	    }
}

?>