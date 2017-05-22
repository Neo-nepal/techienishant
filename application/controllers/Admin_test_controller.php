<?php 
error_reporting(0); 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class Admin_test_controller extends CI_controller
{
  
  function __construct()
  {
    parent::__construct(); 
    $this->load->helper('url');
    $this->load->model('Admin_test_model');
  }
  public function index()
  {
    $data['admin_test_data']= $this->Admin_test_model->Get_all_data();
      $data['admin_test_details'] = $this->Admin_test_model->admin_test_details();
      $this->load->view('Admin Test/Instractions',$data);
  }
   public function Admin_test_view()
  {
    $data['admin_test_data']= $this->Admin_test_model->Get_all_data();
      $data['admin_test_details'] = $this->Admin_test_model->admin_test_details();
      $this->load->view('Admin Test/Admin_test_view',$data);

  }
  public function Admin_result()
  {
    $_SESSION['right']=0;
         $data['Answer'] = $this->Admin_test_model->get_answer();

      $this->load->view('Admin Test/Admin_test_result',$data);
  }
}

?>