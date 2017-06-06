<?php 

class Eductional_model extends CI_model
{
	function __construct()
	{

	}

	function fetch_class_from_db()
    {
     $sql ="SELECT * FROM class_table"; 
      $query = $this->db->query($sql);
      return $query->result();
     
    }
    function fetch_subject_from_db($class_id)
    {   
        $this->db->where('class_id',$class_id);
    	$query = $this->db->get('subject_table');
        return $query->result();
    }
    function fetch_topics_from_db($subject_id)
    {
    	//$this->db->where('class_id',$_SESSION['class_id']);
    	$this->db->where('subject_id',$subject_id);
    	$query = $this->db->get('topic_table');
        return $query->result();
    }
      function total_student_and_details()
      {
      	$query = $this->db->get('users');
        return $query->result();
      }
    function deadlines()
      {
      	
        $this->db->where('Uesr_id',$_SESSION['user_id']);
        $query = $this->db->get('newdeadlines');
        return $query->result();
      }
      public function explain($class_id)
      {
      	$this->db->where('topic_id',$_SESSION['topic_idas']);
    	$query = $this->db->get('summry_and_video');
        return $query->result();
      }
      public function add_deadlines()
      {
       $topic = $_GET['topic'];
        $from1= $_GET['from1'];
         $to1 = $_GET['to1'];
       echo  $Uesr_id =$_SESSION['user_id'];
         
        $data = array(
          'topic' =>$topic , 
          'from1' =>$from1 ,
          'to1'=> $to1,
          'Uesr_id'=> $Uesr_id);
        $this->db->insert('newdeadlines',$data);

      }
      public function delete_deadline()
      {
  
       $this->db->where('deadlines_id', $_GET['deadlines_id']);
       $this->db->where('Uesr_id',$_SESSION['user_id']);
        $this->db->delete('newdeadlines'); 
      }
}
?>