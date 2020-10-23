<?php
class Login_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();

	}
/*public function validate($username,$password) {
$this->db->select("*");
$this->db->from('login_details');

// $where="username= '$username' AND password='$password' ";
$this->db->where('Username',$this->input->post('uname'));
$this->db->where('Password',$this->input->post('psw'));
$query=$this->db->get();
// echo $this->db->last_query();

if($query->num_rows() >0)

{
return $query->result_array();

}


else{


return array();

}


}*/
/////////////////////////////////

public function login($data) {

// $condition = "email =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
// $this->db->select('*');
// $this->db->from('clist');
// $this->db->where($condition);
// $this->db->limit(1);
// $query = $this->db->get();
   $username = $this->input->post('uname');
   $password = $this->input->post('psw');
  $query="select * from login_details where Username='$username' and Password='$password' ";
$query=$this->db->query($query);
//echo $this->db->last_query();exit();
if ($query->num_rows() == 1) {
  //$data['status'] = true;
            $row = $query->row();
//var_dump($row);
             $datas = $query->result_array();
            $usertype =$datas[0]['Username'];
            //echo $usertype;exit(); 
            //$user_name =$datas[0]['name'];
//var_dump($usertype);exit();
            $userid =$datas[0]['sno'];
           // $staffid =$datas[0]['staff_id'];
            //$brid =$datas[0]['branch_id'];
                                                                                        //var_dump($staffid);exit();
            $this->session->set_userdata('username',$usertype);
            //$this->session->set_userdata('user_name',$user_name);
            $this->session->set_userdata('sno',$userid);
return true;
} else {
return false; 
}
}
public function read_user_information($username) {

$condition = "Username =" . "'" . $username . "'";
$this->db->select('*');
$this->db->from('login_details');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}
 /////////////////////////////////////change password////////////////////////////
   public function changepasword()
{ 

  $npwd=$this->input->post('npsw'); 
  $cpwd=$this->input->post('cpsw'); 
  $opwd=$this->input->post('psw'); 
  $qry="select * from login_details where Password = '$opwd' ";
             $qry=$this->db->query($qry);
             //echo $this->db->last_query();exit();
             if($qry->num_rows()>0)
             {
              if($npwd==$cpwd)
              {

                      $data = array(
                     'Password'=>$this->input->post('npsw')
                     
                     
                        );
                      $this->db->where('Password', $opwd);
                    $qry=$this->db->update('login_details',$data);
                    if($data)
                        {
                          ?>  
                              <script>
                                 alert("password has been updated successfully");
                                 window.location="<?php echo base_url().'index.php/addmoviecontrolle/pssredirect';?>";
                                 
                              </script>
                              <?php

                        }
                    //return true;
                     }
                    else
                    {?>
                     <script>
                      alert("mismatch");
                      window.location="<?php echo base_url().'index.php/addmoviecontrolle/pssredirect';?>";
                      </script>
                    <?php 
                    }
              }
              else{
              ?>
              <script>
              alert("make sure old password you entered is right");
              window.location="<?php echo base_url().'index.php/login_controller/index';?>";
              </script><?php

              }
              
             
 
              

}
}
?>