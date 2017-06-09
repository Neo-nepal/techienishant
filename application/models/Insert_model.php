<?php

class Insert_model extends CI_model
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
        $this->db->where('class_id',$_SESSION["class_id"]);
      $query = $this->db->get('subject_table');
      return $query->result();
    
    }
      
   function search_topics()
    {
      $class_id=$_SESSION["class_id"];

      $subject_id=$_GET['subject_id'];
     
      $this->db->where('subject_id',$subject_id);
  
      $query = $this->db->get('topic_table');
      return $query->result();
    }
   function Select_quesation()
    {
     $class_id=$_SESSION["class_id"];
     $subject_id = $_SESSION['subject_id'];
     $_SESSION['topic']=$topic_id=$_SESSION['topic_id'];
     $this->db->where('subject_id',$subject_id);
     $this->db->where('class_id',$class_id);
     $this->db->where('topic_id',$topic_id);
     $query = $this->db->get('question_table');
     return $query->result();
    }
   function submit()
    {
    
   
    $class_id=$_SESSION["class_id"];
   
    $subject_id = $_SESSION['subject_id'];


     $topic_id=$_SESSION['topic_id'];

     $this->db->limit(1);
     $this->db->set('subject_id',$subject_id);
     $this->db->set('class_id',$class_id);
     $this->db->set('topic_id',$topic_id);
     $query = $this->db->get('question_table');
     return $query->result();
    }
    function insert_topic()
    {
      $topic=$_POST['topic'];
      $subject_id = $_SESSION['subject_id'];
      $this->db->set('subject_id',$subject_id);
      $this->db->set('topic_name',$topic); 
      $this->db->insert('topic_table');
    }
      function insert_subject()
    {
       $subject_name=$_POST['subject_name'];
      $class_id = $_SESSION["class_id"];
      $this->db->set('class_id',$class_id);
      $this->db->set('suject_name',$subject_name); 
      $this->db->insert('subject_table');
    }
    function Insert_question()
    {

    $question=$_POST['question'];
    $A=$_POST['A'];
    $B=$_POST['B'];
    $C=$_POST['C'];
    $D=$_POST['D'];
    $ans=$_POST['ans'];
    $topic_id=$_SESSION['topic_id'];


    $this->db->set('topic_id', $topic_id); 
    $this->db->set('quesations', $question); 
    $this->db->set('A',$A);
    $this->db->set('B',$B);
    $this->db->set('C',$C);
    $this->db->set('D',$D);
     $this->db->set('ANS',$ans); 
     $this->db->insert('question_table'); 
    
   }
  
   function ban_on_user()
   {
  $data = array(
    'banned' => 1,
    'ban_reason' => $_POST['reson'] 
    );
    
    $this->db->where('email',$_POST['email']);
     $this->db->update('users',$data); 
     return true;
   }
   function allow_user()
   {
    $data = array(
        'banned' => 0,
        'ban_reason' => $_POST['reson'] 
        );
     $this->db->where('email',$_POST['email']);
     $this->db->update('users',$data); 
   }
   function active_user()
   {
      $data = array(
        'activated' => 1,
        'ban_reason' => $_POST['reson'] 
        );
     $this->db->where('email',$_POST['email']);
     $this->db->update('users',$data); 
    
   }
   function admin_registration()
   {

     $this->db->set('first_name',$_POST['name']);
     $this->db->set('last_name',$_POST['last_name']);
     $this->db->set('mobile',$_POST['mobile']);
     $this->db->set('email',$_POST['email']);
     $this->db->set('password',$_POST['password']);
     $this->db->insert('admin');
   }
   function login()
   {
    $_SESSION['email']=$_POST['email'];
    $this->db->where('email',$_POST['email']);
    $query = $this->db->get('admin');
     return $query->result();
   }
   function login_confam()
   {
     $data = array('login' => 1, );
     $this->db->where('email', $_SESSION['email']);
     $this->db->update('admin',$data);
     return true;

   }
   function logout()
   {
     $data = array('login' => 0, );
     $this->db->where('email', $_SESSION['email']);
     $this->db->update('admin',$data);
     return true;
   }
 
   public function update_study_contain()
   {
     $this->db->where('topic_id', $_SESSION['topic_id']);
     $this->db->set('explaination',$_POST['explain']);
     $this->db->set('video',$_POST['video']);
     $this->db->set('summry',$_POST['summry']);
     $this->db->set('topic_id',$_SESSION['topic_id']);
     $this->db->set('headings',$_POST['heading']);
     $this->db->set('images',$_POST['image']);
     $this->db->set('Qusetion_and_ans',$_POST['qaa']);
      $this->db->update('summry_and_video');;
     
   }
    function edit_study()
   {
    $this->db->where('topic_id', $_SESSION['topic_id']);
     $query = $this->db->get('summry_and_video');
     return $query->result();
   }
   
    public function get_new_topic_id()
    {
    $this->db->where('class_id',$_SESSION["class_id"]);
    $this->db->where('subject_id',$_SESSION["subject_id"]);
   $query = $this->db->get('topic_table');
   return $query->result();
    }

    public function check_multi_data()
    {
     
       $this->db->where('topic_id',$_SESSION['topic_id']);
        $query = $this->db->get('summry_and_video');
       if ($query->num_rows() > 0){
        return true;
    }
    else
    {
        return false;
    }
       
    }
     public function insert_study_contain()
    {
    $this->db->set('explaination',$_POST['explain']);
     $this->db->set('video',$_POST['video']);
     $this->db->set('summry',$_POST['summry']);
     $this->db->set('topic_id',$_SESSION['topic_id']);
     $this->db->set('headings',$_POST['heading']);
     $this->db->set('images',$_POST['image']);
     $this->db->set('Qusetion_and_ans',$_POST['qaa']);
      $this->db->insert('summry_and_video');
    }
    public function detete_study_contain()
    {
      $this->db->where('topic_id',$_SESSION['topic_id']);
       $this->db->delete('summry_and_video');
       return true;

    }
    public function delete_topics()
   {
    
       $this->db->where('topic_id', $_GET['topic_id']);
        $this->db->delete('topic_table');
        return true;
   }
   public function Insert_class()
   {
     
    $class=$_POST['class'];
     $this->db->set('class_name',$class); 
     $this->db->insert('class_table'); 
     }

     public function massage()
   {
      $this->db->set('Name',$_GET['name']); 
     $this->db->set('phone',$_GET['phone_number']);
     $this->db->set('email',$_GET['email']);
      $this->db->set('massage',$_GET['massage']); 
     $this->db->insert('massage'); 
     }
      public function get_admin_data()
     {
     $query = $this->db->get('admin_test_details');
       return $query->result();
     }
     public function insert_admin_data($code)
     {
      $this->db->set('subjec_name',$_POST['Subject']); 
     $this->db->set('topic_name',$_POST['Topics']);
      $this->db->set('Time',$_POST['time']); 
      $this->db->set('unique_code',$code); 
      $this->db->set('Time',$_POST['time']); 
      $this->db->set('class_id',$_POST['class_id']);
     $this->db->insert('admin_test_details');
     }
      public function update_admin_data($code)
     {
      $this->db->set('subjec_name',$_POST['Subject']); 
     $this->db->set('topic_name',$_POST['Topics']);
     $this->db->set('class_id',$_POST['class']);
      $this->db->set('Time',$_POST['time']); 
      $this->db->where('class_id',$_POST['class_id']);
      $this->db->set('unique_code',$code);
      $this->db->set('class_id',$_POST['class_id']); 
     $this->db->update('admin_test_details');
     }
     public function Admin_question_test()
     {
  
    $this->db->set('quesations', $_POST['question']); 
    $this->db->set('A',$_POST['A']);
    $this->db->set('B',$_POST['B']);
    $this->db->set('C',$_POST['C']);
    $this->db->set('D',$_POST['D']);
     $this->db->set('class_id',$_SESSION['class_id_4_admin']);
     $this->db->set('ANS',$_POST['ans']); 
     $this->db->insert('question_table_admin_test'); 
     }
     public function Transfer_admin_to_self()
     {
       
    $class_id=$_SESSION["class_id"];
    $subject_id = $_SESSION['subject_id'];


 $topic_id=$_SESSION['topic_id'];

    
    $this->db->set('subject_id',$subject_id);
    $this->db->set('class_id',$class_id);
    $this->db->set('topic_id', $topic_id); 
    $this->db->set('quesations',$_SESSION['quesations']); 
    $this->db->set('A',$_SESSION['A']);
    $this->db->set('B', $_SESSION['B']);
    $this->db->set('C', $_SESSION['C']);
    $this->db->set('D', $_SESSION['D']);
     $this->db->set('ANS', $_SESSION['ans']); 
     $this->db->insert('question_table'); 
          return true;
     }
     public function delete_admn_que()
     {  $this->db->where('question_id > ', 0);
       $this->db->truncate('question_table_admin_test');
        return true;
     }
     public function delete_admn_details()
     {
       $this->db->where('sr_no', 1);
       $this->db->delete('admin_test_details');
        return true;
     }
     public function checkbox()
     { 
       for ($i=1; $i < $_POST['string']+1; $i++) { 
       $checkboxn = "checkbox".$i;
       $question_idn = "question_id".$i;
       if (empty($_POST[$checkboxn])) {
        $this->db->set('checkbox ',0);
       }
       else
       {
        $this->db->set('checkbox ',$_POST[$checkboxn]);
       }
         
          $this->db->where('question_id',$_POST[$question_idn]);
          $this->db->Update('question_table'); 
       
     }
        
        } 
   public   function Select_quesation_admin_test_transfer()
    {
     $class_id=$_SESSION["class_id"];
     $subject_id = $_SESSION['subject_id'];
     $_SESSION['topic']=$topic_id=$_SESSION['topic_id'];
        $this->db->where('checkbox',1);
     $this->db->where('subject_id',$subject_id);
     $this->db->where('class_id',$class_id);
     $this->db->where('topic_id',$topic_id);
 
     $query = $this->db->get('question_table');
     return $query->result();
    }
    public function Admin_question_test_transfer()
     {
  
    $this->db->set('quesations',  $_SESSION['question_admin']); 
    $this->db->set('A', $_SESSION['A_admin']);
    $this->db->set('B',$_SESSION['B_admin']);
    $this->db->set('C', $_SESSION['C_admin']);
    $this->db->set('D', $_SESSION['D_admin']);
    $this->db->set('class_id', $_SESSION['class_id_4_admin']); 
     $this->db->set('ANS', $_SESSION['ans_admin']); 
     $this->db->insert('question_table_admin_test'); 
     }

     public function Admin_question_test_transfer_delete()
     {
          $this->db->where('question_id',$_SESSION['question_id']); 
          $this->db->delete('question_table');
     }
     public function Set_class_id_in_test()
     {
  
     $this->db->set('class_id', $_POST['class_id']); 
     $this->db->insert('question_table_admin_test'); 
     }
      public function update_class_id_in_test()
     {
  
     $this->db->set('class_id', $_POST['class_id']); 
     $this->db->insert('question_table_admin_test'); 
     }
}?>  

