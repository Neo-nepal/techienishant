<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Self_test extends CI_Controller {

	public function index()
	{
		$data['classes'] = $this->Self_test_model->get_classes();
	    $this->load->view('Test/class_test_home',$data);
	}

	public function search_subject()
	  {?> <script type="text/javascript"></script>
        <option>Select subject</option><?php
         $data['search_subject'] = $this->Self_test_model->search_subject();
		 foreach($data['search_subject'] as $row1)
        { 
       $show .= "<option value='".$row1->subject_id."'>".$row1->suject_name."</option>";
        } 
       echo $show;
	  }
	public function select_topics()
    {
     $data['topics'] = $this->Self_test_model->search_topics();
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
     $data['quesations'] = $this->Question_model->Select_quesation();
      $data['quesations_all'] = $this->Question_model->Select_quesation_all();
     
     foreach ( $data['quesations'] as $key ) 
     {
        $_SESSION['question_id']= $key->question_id;
     }
     $this->load->view('Test/test_question_view',$data);
    }
     public function quesation_view2()
    {  
     $data['quesations'] = $this->Question_model->Select_quesation();
       $data['quesations_all'] = $this->Question_model->Select_quesation_all();
     foreach ( $data['quesations'] as $key ) 
     {
        $_SESSION['question_id']= $key->question_id;
     }
     $this->load->view('Test/test_question_view',$data);
    }
}
