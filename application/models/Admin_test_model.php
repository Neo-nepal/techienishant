<?php  
class Admin_test_model extends CI_model
{
  function __construct()
  {

  }

  public function Get_all_data()
  {   
    $this->db->where('class_id',$_SESSION['class_id']);
    $query =  $this->db->get('question_table_admin_test');
    return $query->result();
  }
   function get_answer()
    {
       $query = $this->db->get('question_table_admin_test');
      return $query->result();
    }
      
    public function admin_test_details()
    {
      $query = $this->db->get('admin_test_details');
        return $query->result();
    }
	public function get_data_admin_test()
	{
      $this->db->where( 'users_name', $_SESSION['username']);
	    $query = $this->db->get('Admin_test');
      return $query -> result();
	}
    public function set_time($givetime)
  { 
   date_default_timezone_set('Asia/Kolkata');
   $start_time = date("H:i:s");

  $selectedTime = $start_time;
  $getTimeStamp = $givetime;
$date = new \DateTime($getTimeStamp);

 $dateString = $date->format('Y-m-d');
 $hourString = $date->format('H');
 $minuteString = $date->format('i');
 $Secondstring = $date->format('s'); 
$endTime = strtotime("+ $hourString hours + $minuteString minutes + $Secondstring seconds", strtotime($selectedTime));
 $endTime = date('H:i:s', $endTime);
$data = array('start_time' => $start_time,
      'Ending_time' => $endTime,
      
    'unique_code' => $_SESSION['unique_test_code'],
      'Date' => $dateString,
      'users_name'=> $_SESSION['username']);
        $this->db->insert('Admin_test',$data);
       $this-> get_data_admin_test();
   }
   public function sumition_time()
   {
     date_default_timezone_set('Asia/Kolkata');
   $submit_time = date("H:i:s");
   $data = array('submit_time' => $submit_time,);
    $this->db->where( 'users_name', $_SESSION['username']);
   $this->db->update('Admin_test',$data);
   }
   public function get_result()
   {
     $this->db->where( 'Student_name', $_SESSION['username']);
    $query = $this->db->get('result_table');
       return $query->result();
   }
   public function link_en_di_able()
   {
   $this->db->where('username', $_SESSION['username']);
    $query = $this->db->get('link_en_di_able');
     return $query->result();
   }
   public function set_status()
   {
     $data = array('status' => 0,
      'username'=> $_SESSION['username']);
        $this->db->insert('link_en_di_able',$data);
    
   }
   public function get_link_en_di_able()
   {
    $this->db->where('username',$_SESSION['username']);
        $query =  $this->db->get('link_en_di_able');
          return $query->result();
   }
   public function update_status()
   {
        $data = array('status' =>0);
         $this->db->where('username', $_SESSION['username']);
        $this->db->update('link_en_di_able',$data);
   }
}

 ?>