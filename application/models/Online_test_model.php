
<?php  
error_reporting(0);
class Online_test_model extends CI_model
{
  function __construct()
  {
  $this->load->database();
  }

  function Users_class()
    {   
	  $this->db->select('gender');
	  $this->db->where('username',$_SESSION['username']);
	  
      $query = $this->db->get('users');
      return $query->result();
    }
	  function get_classes()
    {
      $query = $this->db->get('class_table');
      return $query->result();
    }
     function search_subject($class_id)
    {
    $this->db->where('class_id',$class_id);
      $query = $this->db->get('subject_table');
      return $query->result();
    }
      function search_topics()
    {
      $this->db->where('subject_id',$_GET['subject_id']);
      $query = $this->db->get('topic_table');
      return $query->result();
    }
      
        function Select_quesation()
    {

      // $limit =  $this->uri->segment(3);
     //  $wheref =  $this->uri->segment(4);
    
     $this->db->where('topic_id', $_SESSION['topic_id']);
    //$this->db->limit($limit,$wheref); 
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
