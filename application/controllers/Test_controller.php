<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Test_controller extends CI_Controller 
{
	 function __construct()
  {
    parent::__construct(); 
    $this->load->helper('url');
  }

// Defult calling functiion load home poage..

	 public function index()
	  {
    $this->load->view('Home');
	  }
    //  End the defult clear.......


// Select  all class
    public function class_test()
  {
    $data['classes'] = $this->Question_model->get_classes();
    $this->load->view('test/class_test_home',$data);
    }
      

 // Select all subject.. 
      
	 public function search_subject()
	  {  
		$_SESSION["class_id"] = $class_id=$_GET['class_id'];   
     ?> <script type="text/javascript"></script>
      <option>Select subject</option><?php
     $data['search_subject'] = $this->Eductional_model->fetch_subject_from_db($class_id);
		 foreach($data['search_subject'] as $row1)
      { 
       $show .= "<option value='".$row1->subject_id."'>".$row1->suject_name."</option>";
      } 
       echo $show;
	  }
//Select topic...



	 public function select_topics()
    {
   $_SESSION['subject_id']= $subject_id =$_GET['subject_id'];
     $data['topics'] = $this->Eductional_model->fetch_topics_from_db($subject_id);
     ?>  <option>Select Topic</option><?php
     foreach($data['topics'] as $row1)
      { 
       $show .= "<option  value='".$row1->topic_id."'>".$row1->topic_name."</option>";
      } 
      echo $show;
    }
// Select one time frist question

   public function quesation_view()
  	{  
     $_SESSION['topic_id'] =$_POST['neo'];
     $data['quesations'] = $this->Question_model->Select_quesation();
     
     foreach ( $data['quesations'] as $key ) 
     {
        $_SESSION['question_id']= $key->question_id;
     }
     $this->load->view('test/test_question_view',$data);
    }

  
  public function update_profile()
  {
 $data['change_user_name']= $this->Question_model->update_profile();

 foreach ($data['change_user_name']  as $key) {
  $_SESSION['user_name']=$key->username;
 }
redirect('http://www.aimclasses.esy.es/index.php/auth/profile');
  }
  public function read_more()
  {
    $this->load->view('Home');
  }

}
