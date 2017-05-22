<?php  
class Self_test_model extends CI_model
{
  function __construct()
  {
  $this->load->database();
  }

  function get_classes()
    {
      $query = $this->db->get('class_table');
      return $query->result();
    }
     function search_subject()
    {
    $this->db->where('class_id',$_GET['class_id']);
      $query = $this->db->get('subject_table');
      return $query->result();
    }
      function search_topics()
    {
      $this->db->where('subject_id',$_GET['subject_id']);
      $query = $this->db->get('topic_table');
      return $query->result();
    }
      
}?>