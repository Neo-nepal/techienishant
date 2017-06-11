<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Online_test_controller extends CI_Controller {
  function __construct()
  {
   parent::__construct(); 
     if (!isset($_SESSION['username'])) {
     redirect('auth');
    }

  }

	public function index()
	{
		$data['classes'] = $this->Online_test_model->Users_class();
		foreach ($data['classes'] as $key) {
			$_SESSION['class_id'] = $key->gender;
      $this->search_subject($key->gender);
    }
	//	$this->load->view('online test/Online_test_view_home.php',$data);
  	}

	public function search_subject($class_id)
	  {
         $data['search_subject'] = $this->Online_test_model->search_subject($class_id);
		    $this->load->view('online test/Online_test_view_home.php',$data);
	  }
	public function select_topics()
    {
     $data['topics'] = $this->Online_test_model->search_topics();
     ?>  <option>Select Topic</option><?php
     foreach($data['topics'] as $row1)
      { 
       $show .= "<option  value='".$row1->topic_id."'>".$row1->topic_name."</option>";
      } 
      echo $show;
    }
     public function quesation_view()
  	{  
     $_SESSION['topic_id']=$_POST['neo'];
     $data['quesations'] = $this->Online_test_model->Select_quesation();
      $data['quesations_all'] = $this->Online_test_model->Select_quesation_all();
     
     foreach ( $data['quesations'] as $key ) 
     {
        $_SESSION['question_id']= $key->question_id;
     }
     $this->load->view('online test/Online_test_view_question',$data);
    }
     public function quesation_view2()
    {  
     $data['quesations'] = $this->Online_test_model->Select_quesation();
       $data['quesations_all'] = $this->Online_test_model->Select_quesation_all();
     foreach ( $data['quesations'] as $key ) 
     {
        $_SESSION['question_id']= $key->question_id;
     }
     $this->load->view('online test/Online_test_view_question',$data);
    }
}
