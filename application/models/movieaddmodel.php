
<?php
class Movieaddmodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
  ///////////get language from database///////////////////////
	 public function getlanguages()
	 {
	 	   $query="select * from languages";
        $qry=$this->db->query($query);
        $res=$qry->result();
        return $res;
         }
 /* public function getstatus()
          {
         $qy="select * from status";
        $q=$this->db->query($qy);
        $r=$q->result();
        return $r;
         }*/

         ///////check show date already in db/////////////

       public function aboutmovie($images)  
          {$Movie=$this->input->post('moviename');
          $sdate=$this->input->post('sdate');
          $stime=$this->input->post('stime');
          $q="select * from movie_tb where Sdate='$sdate' and Stime='$stime'";
          $qr = $this->db->query($q);
            $query="select * from movie_tbl1 where Movie='$Movie'";
            $qry = $this->db->query($query);
            //echo $this->db->last_query();exit();
            if($qr->num_rows()>0)
            {
              ?>
              <script type="text/javascript">
                alert("Field already exist in this showdate and time");
                window.location= '<?php echo base_url();?>index.php/addmoviecontrolle/addmovie';
              </script>
            <?php
             }
            elseif($qry->num_rows()>0)
            {

             $result=$qry->row();
            $m_id=$result->Movie_id;
            //echo $mov;exit();
          $data = array(
            
              'Movieid'=>$m_id,
             'Sdate'=>$this->input->post('sdate'),
             'Stime'=>$this->input->post('stime'),
             'Etime'=>$this->input->post('etime'),
             'Status'=>$this->input->post('status')
             //'Image' => $images 
             );
          $qry=$this->db->insert('movie_tb',$data);
          return $qry;
           
        }
         
        else
        {
         $data = array(
              'Movie'=>$this->input->post('moviename'),
              'Language'=>$this->input->post('language'),
               'Image' => $images);
             $qry=$this->db->insert('movie_tbl1',$data);
             $m_id=$this->db->insert_id();

           $data = array(
            //'Movie'=>$this->input->post('moviename'),
            //'Language'=>$this->input->post('language'),
              'Movieid'=>$m_id,
             'Sdate'=>$this->input->post('sdate'),
             'Stime'=>$this->input->post('stime'),
             'Etime'=>$this->input->post('etime'),
             'Status'=>$this->input->post('status')
             //'Image' => $images 
             );
            $qry=$this->db->insert('movie_tb',$data);
            return $qry;
        }

             
          } 
        function Show_movies()
        {
         return $this->db->get('movie_tb')->result();
       }
      
     }
?>