
<?php
error_reporting(0);

defined('BASEPATH') OR exit('No direct script access allowed');

class Result_controller extends CI_Controller
{
	
	function __construct()
	{
	parent::__construct(); 
    $this->load->helper('url');
    $this->load->model('Result_model');


if (empty($_SESSION['user_name'])
 && isset($_SESSION['user_name']))
		{

			redirect('<?=base_url();?>index.php/Test_controller/class_test');
		}


	}

	public function result()
	{
		$_SESSION['right']=0;
         $data['Answer'] = $this->Result_model->get_answer();
	 $this->load->view('Test/result',$data);
	}

	 

}?>

