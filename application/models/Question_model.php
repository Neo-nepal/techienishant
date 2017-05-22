<?php

class Question_model extends CI_model
{
	
	function __construct()
	{
	$this->load->database();
	}
   
   function Select_quesation()
    {

         $limit =  $this->uri->segment(3);
  $wheref =  $this->uri->segment(4);
    
     $this->db->where('topic_id', $_SESSION['topic_id']);
    $this->db->limit($limit,$wheref); 
     $query = $this->db->get('question_table');
     return $query->result();
    }
   public function Select_quesation_all()
   {
      $this->db->where('topic_id', $_SESSION['topic_id']); 
     $query = $this->db->get('question_table');
       return $query->result();
   }
  
}?>