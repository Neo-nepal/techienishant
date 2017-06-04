
<?php


class Online_test_result_model extends CI_model
{
	
	function __construct()
	{
	$this->load->database();

	}
	 function get_answer()
	 	{

      $this->db->where('topic_id',$_SESSION['topic_id']);
       $query = $this->db->get('question_table');
      return $query->result();
     }
    public function Save_result($right,$worng,$noteattemt,$total)
     { 

     $data = array('total_marks' => $total,
      'obtain_marks' => $right,
      'Date' => date('Y-m-d H:i:s'),
      'Wrong' => $worng,
      'Student_name'=> $_SESSION['username']);
      $this->db->insert('result_table',$data);
      return true;
     }
  	  
  	  public function show_result()
  	  {
  	  	$this->db->where('Student_name',$_SESSION['username']);
  	  $query = $this->db->get('result_table');
  	  print_r(  $query);
  	  return $query->result();

  	  }
   
  
}?>