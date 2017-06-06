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
      $data['admin_test_details'] = $this->Admin_test_model->admin_test_details();
      $this->load->view('Admin Test/Instractions',$data);
  }
   public function Admin_test_view()
  {   
          
     $data['admin_test_details'] = $this->Admin_test_model->admin_test_details();
     $data['admin_test_data']= $this->Admin_test_model->Get_all_data();
     $data['admin_test']= $this->Admin_test_model->get_data_admin_test();
     if(empty($data['admin_test'])){
       foreach ( $data['admin_test_details'] as  $giventime) { $giventime->Time ;}
       $this->Admin_test_model->set_time($giventime->Time);
       $data['admin_test']= $this->Admin_test_model->get_data_admin_test();
      $this->load->view('Admin Test/Admin_test_view',$data);
     }
     else
     {
 foreach ( $data['admin_test'] as $key) {if (is_null($key->submit_time))
  {
     $data['admin_test_details'] = $this->Admin_test_model->admin_test_details();
     $data['admin_test_data']= $this->Admin_test_model->Get_all_data();
     $data['admin_test']= $this->Admin_test_model->get_data_admin_test();
     $this->load->view('Admin Test/Admin_test_view',$data);
  }
 else
 {
  $data['get_result']=$this->Admin_test_model->get_result();
  $this->load->view('Admin Test/Result_show',$data);
 }
}}
   

  }
  public function Admin_result()
  {  
        $date['sumition_time'] = $this->Admin_test_model->sumition_time();
    $_SESSION['right']=0;
     $_SESSION['wrong']=0;
       $data['Answer'] = $this->Admin_test_model->get_answer();
       $wrong = 0;  foreach (  $data['Answer'] as $ans) {
             $i++;
              $total_question= $i; 
             if (empty($_POST[$i])){$notated++ ;} else {
              if ($_POST[$i]==$ans->ANS){  $_SESSION['right']++;}else{   $_SESSION['wrong']++ ;}} 
           }
         $true_or_not =   $this->Online_test_result_model->Save_result( $_SESSION['right'],$_SESSION['wrong'],$notate,$total_question);
          $this->Admin_test_view();
    }
   
}

?>