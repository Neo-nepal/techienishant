<?php


class Result_model extends CI_model
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
  	  
   
  
}?>