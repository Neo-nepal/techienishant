<?php  
class Admin_model extends CI_model
{
  function __construct()
  {

  }

  public function Get_all_data()
    {
      $query =  $this->db->get('question_table_admin_test');
      return $query->result();
    }
  public function get_answer()
    {
       $query = $this->db->get('question_table_admin_test');
      return $query->result();
    }
      
  public function admin_test_details()
    {
      $query = $this->db->get('admin_test_details');
      return $query->result();
    }
  public function get_classes()
    {
      $query = $this->db->get('class_table');
      return $query->result();
    }
  public function get_topics()
    {
      $query = $this->db->get('topic_table');
      return $query->result();
    }
  public function get_questions()
    {
      $query = $this->db->get('question_table');
      return $query->result();
    }
  public function get_subjects()
    {
      $query = $this->db->get('subject_table');
      return $query->result();
    }

  public function massage_get()
    { 
      $query = $this->db->get('massage');
       return $query->result();
    }
  public function get_data_from_quetable()
    {
      $query = $this->db->get('question_table');
      return $query->result();
    }
  public function users()
   {
    $query= $this->db->get('users');
     return  $query->result();
   }
  public function classes()
   {
     $query=$this->db->get('question_table');
      return  $query->result();
   }
   public function get_link_en_di_able(){
    $query = $this->db->get('link_en_di_able');
   return  $query->result();
   }
    public function allow()
  {
	    $data = array('status' =>1);
         $this->db->where('username', $_POST['username']);
        $this->db->update('link_en_di_able',$data);
  }
}

 ?>