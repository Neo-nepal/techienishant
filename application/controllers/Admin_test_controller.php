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
   if (!isset($_SESSION['username'])) {
     redirect('auth');
     }
  }
  public function index()
  {   
    $data['classes'] = $this->Online_test_model->Users_class();
    foreach ($data['classes'] as $key) {
      $_SESSION['class_id'] = $key->gender;
    }

    $data['link_en_di_able'] =  $this->Admin_test_model->link_en_di_able();
      if (!empty($data['link_en_di_able'])) {
        foreach ( $data['link_en_di_able'] as $key) 
        if ($key->status==0) {
        $data['get_result']=$this->Admin_test_model->get_result();
        $this->load->view('Admin Test/Result_show',$data);
        }
        else
      {
       $data['admin_test_details'] = $this->Admin_test_model->admin_test_details();
      $this->load->view('Admin Test/Instractions',$data); 
      }
        
      }
      else
      {
       $data['admin_test_details'] = $this->Admin_test_model->admin_test_details();
      $this->load->view('Admin Test/Instractions',$data); 
      }

    }
   public function Admin_test_view()
  {   

     $data['admin_test_details'] = $this->Admin_test_model->admin_test_details();
     $data['admin_test_data']= $this->Admin_test_model->Get_all_data();
     $data['admin_test']= $this->Admin_test_model->get_data_admin_test();
     foreach ( $data['admin_test_details'] as  $giventime) { $giventime->Time ;  $giventime->unique_code ;}
     foreach ( $data['admin_test'] as $key ){}
      $_SESSION['unique_test_code'] = $giventime->unique_code;
     if ($giventime->unique_code == $key->unique_code) {
      echo "You have already done your test";
     // redirect('Admin_test_controller');
      }
     else
     {
     $data['link_en_di_able'] =  $this->Admin_test_model->link_en_di_able();
      if (!empty($data['link_en_di_able'])) {
        foreach ( $data['link_en_di_able'] as $key) 
        if ($key->status==0) {
        redirect('Admin_test_controller');
        }
        else
      {  
        $this->Admin_test_model->set_time($giventime->Time);
        $data['admin_test']= $this->Admin_test_model->get_data_admin_test();
        $this->load->view('Admin Test/Admin_test_view',$data);
      }
        
      }
      else
      {
       $this->Admin_test_model->set_time($giventime->Time); 
        $data['admin_test']= $this->Admin_test_model->get_data_admin_test();
        $this->load->view('Admin Test/Admin_test_view',$data);
      }
     }
   }
  public function Admin_result()
  {  
     $date['link_en_di_able'] = $this->Admin_test_model->get_link_en_di_able();
     if (empty($date['link_en_di_able'])) {   $this->Admin_test_model->set_status();}else{ $this->Admin_test_model->update_status();}
  
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
    redirect('Admin_test_controller');
    }
   
}

?>