<?php  
class Admin_test_model extends CI_model
{
  function __construct()
  {

  }

  public function Get_all_data()
  {
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
}

 ?>