
<?php
error_reporting(0);

defined('BASEPATH') OR exit('No direct script access allowed');

class Online_test_result_controller extends CI_Controller
{
	function __construct()
  {
  parent::__construct(); 
    $this->load->helper('url');
    $this->load->model('Online_test_result_model');


if (empty($_SESSION['user_name'])
 && isset($_SESSION['user_name']))
    {

      redirect('<?=base_url();?>index.php/Test_controller/class_test');
    }


  }

  public function result()
  {
    $_SESSION['right']=0;
         $data['Answer'] = $this->Online_test_result_model->get_answer();
   $this->load->view('online test/online_test_view_result',$data);
  }

}?>

