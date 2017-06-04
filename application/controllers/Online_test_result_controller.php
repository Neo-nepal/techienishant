
<?php
error_reporting(0);

defined('BASEPATH') OR exit('No direct script access allowed');

class Online_test_result_controller extends CI_Controller
{
	function __construct()
  {
   parent::__construct(); 
     if (!isset($_SESSION['username'])) {
     redirect('auth');
    }

  }

	public function result()
	{  
		$_SESSION['right']=0;
		 $_SESSION['wrong']=0;
       $data['Answer'] = $this->Online_test_result_model->get_answer();
       $wrong = 0;  foreach (  $data['Answer'] as $ans) {
						 $i++;
						  $total_question= $i; 
						 if (empty($_POST[$i])){$notated++ ;} else {
						  if ($_POST[$i]==$ans->ANS){  $_SESSION['right']++;}else{   $_SESSION['wrong']++ ;}} 
           }
         $true_or_not =   $this->Online_test_result_model->Save_result( $_SESSION['right'],$_SESSION['wrong'],$notate,$total_question);
        	$this->show_result();
    }
    public function show_result()
    { 
    	$data['Answer'] = $this->Online_test_result_model->get_answer();
    $data['result'] = $this->Online_test_result_model->show_result();
    //print_r($data['result']);
    	$this->load->view('online test/online_test_view_result',$data);	
      session_destroy($_SESSION['right'],$_SESSION['wrong']);
    }



}?>

