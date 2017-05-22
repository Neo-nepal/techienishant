
<style type="text/css">
  
 .alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
}

</style>
<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');


class Insert_controller extends CI_Controller 
{
	 function __construct()
  {
    parent::__construct(); 
    $autoload['helper'] = array('url', 'form', 'date');
    $this->load->model('users');
    $this->load->helper('url');
  }

	 public function index()
	  {
  $data['admin_data'] = $this->Insert_model->users();
  $data['class'] = $this->Insert_model->classes();
  $data['classes'] = $this->Insert_model->get_classes();
  // print_r($data['claSS']);
 $this->load->view('Admin/admin_home',$data);

	  }
    public function getclass()
    {
    $data['classes'] = $this->Insert_model->get_classes();
    $this->load->view('Inseret_question',$data);
    }
	
	 public function search_subject()
	  {?>  <script type="text/javascript"></script>
		  <option>Select subject</option><?php
     $data['search_subject'] = $this->Insert_model->search_subject();
		 foreach($data['search_subject'] as $row1)
      { 
       $show .= "<option value='".$row1->subject_id."'>".$row1->suject_name."</option>";
      } 
       echo $show;
	  }

	 public function select_topics()
    {
     $_SESSION['subject_id'] =$_GET['subject_id'];
     $data['topics'] = $this->Insert_model->search_topics();
     ?>  <option>Select tpoic</option><?php
     foreach($data['topics'] as $row1)
      { 
       $show .= "<option  value='".$row1->topic_id."'>".$row1->topic_name."</option>";
      } 
      echo $show;
    }

   public function quesation_view()
  	{  
      
    $_SESSION['topic_id'] =$_POST['topic_id'];
    $data['quesations'] = $this->Insert_model->Select_quesation();
     foreach ( $data['quesations'] as $key ) 
     {
        $_SESSION['question_id'] = $key->question_id;
     }
     $this->load->view('test/insert_question',$data);
    }
  
  public function load_topic()
  {
   $this->load->view('test/Insert_topic');

  }
 public function insert_question()
  {   
  
   $this->Insert_model->Insert_question();
    $this->load->view('Admin/Insert_ques_ans');
  // redirect("insert_controller/quesation_view");
  
  }
  public function Admin_question_test()
  {   
  
   $this->Insert_model->Admin_question_test();
    $this->load->view('Admin/Admin_test_insert');
  // redirect("insert_controller/quesation_view");
  
  }
  public function insert_topic()
  {
    $this->Insert_model->insert_topic();
   ?>

      <div class="alert alert-success">     
     <strong>Success!</strong> Your subjects successfully inserted !.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div><?php
   header( "refresh:0;url=".base_url().'index.php/admin_controller');
  }
   public function insert_subject()
  { 
    $this->Insert_model->insert_subject();?>

      <div class="alert alert-success">     
     <strong>Success!</strong> Your subjects successfully inserted !.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>

  <?php redirect('http://localhost/quiz/index.php/Admin_controller');
 
  
  }
  public function insert_admin_data()
  {
 $data['$check_multi_data'] =  $this->Insert_model->get_admin_data();

       foreach ( $data['$check_multi_data'] as $key)
        {
        if ($key->sr_no == 1) {
           
  $this->Insert_model->update_admin_data();
    $this->load->view('Admin/Admin_test_insert');
           } 
           else
           {

    $this->Insert_model->insert_admin_data();
      $this->load->view('Admin/Admin_test_insert');
           } 
     
    }
}
  public function ban_on_user()
  {
    $data['ban_on_user'] =  $this->Insert_model->ban_on_user();
    redirect("Admin_controller_new",$data);
  }
  public function allow_user()
  {
    $this->Insert_model->allow_user();
       redirect("Admin_controller_new");
  }
  public function active_user()
  {
    $this->Insert_model->active_user();
     redirect("insert_controller");
  }
  public function delete_user()
  {
    $this->users->delete_user();
     redirect("insert_controller");
  }
  public function admin_registration()
  { 
    $this->Insert_model->admin_registration();
     redirect("insert_controller");
  }
  public function login()
  {

  $data['admin'] = $this->Insert_model->login();
     foreach ($data['admin'] as $data) 
     {
        $_SESSION['admin_name']=$data->first_name;
      if ($data->password==$_POST['password'])
      {
       $data = $this->Insert_model->login_confam();

        $_SESSION['login']=$data;
      }
      else
      {
       echo "Some error Contact to admin";;
      }
     }
  redirect("insert_controller");
    }

    public function logout()
    {
       $data =$this->Insert_model->logout();
        $_SESSION['login']=!$data;

       redirect("insert_controller");
    }
    /* copy from */

     public function select_subject_from_db()
    {
     $data['cls'] = $this->Insert_model->get_classes();
  
       foreach($data['cls'] as $row1)
         { 
       $class ="<h5>". $row1->class_name."</h5>";
       $class_id= $row1->class_id;
      echo ' <a href="javascript:void(0)"><span id="folder" onclick="Select_subject('.$class_id.')"><img src="http://aimclasses.esy.es/assites/image/floder.png"  height="100px">'.$class.'</span></a>';

          } 
  
    }
public function fetch_subject_from_db()
   {
   $_SESSION['class_id'] = $class_id = $_GET['class_id'];
       $data['subject'] = $this->Eductional_model->fetch_subject_from_db($class_id);
       ?><span id="top_of_the_page"> <h4><span id="back_button" onclick="Select_topics(subject_id)"><a href="javascript:void(0)"> </a></span>  <?php
       foreach ($data['subject'] as $key) 
       {
        $subject ="<h5>". $key->suject_name."</h5>";
        $subject_id = $key->subject_id;
        echo ' <a href="javascript:void(0)"><span id="folder" onclick="Select_topics('.$subject_id.')"><img src="http://aimclasses.esy.es/assites/image/floder.png"  height="100px">'.$subject.'</span></a>';
         }
   }
     public function fetch_topics_from_db()
   {

    $class_id = $_SESSION['class_id'];
    $_SESSION['subject_id'] = $subject_id = $_GET['subject_id'];
    $data['topics'] = $this->Eductional_model->fetch_topics_from_db($subject_id);
         

     $this->load->view('Admin/study_contains', $data);
        
      }
 public function detete_study_contain()
 {
  $data['delete'] =$this->Insert_model->detete_study_contain();
  if ($data['delete']==1)
   {
   ?>
  <div class="alert alert-success">     
     <strong>Success!</strong> Data successfully Delete.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div><?php
   $data['update_study'] = $this->Insert_model->edit_study();
      $this->load->view('Admin/update_study_contains',$data);
   }
 
 }
 public function edit_study()
 {
 $_SESSION["topic_id"]=$_GET['topic_id'];
   $data['update_study'] = $this->Insert_model->edit_study();

   $this->load->view('Admin/update_study_contains',$data);
 }
 public function insert_topic_study()
  {
  $this->Insert_model->insert_topic();
   $this->get_new_topic_id();
  }

  public function get_new_topic_id()
  {
      $data['topic_table'] = $this->Insert_model->get_new_topic_id();
     foreach ($data['topic_table'] as $key )
      {

      }
   $_SESSION['topic_id'] = $topic_id = $key->topic_id;
     $topic_name = $key->topic_name;
     $data['update_study'] = $this->Insert_model->edit_study();
      $this->load->view('Admin/update_study_contains',$data);
  }
  public function insert_study_contain()
  {
     $data['topic_id_check'] = $this->Insert_model->Check_multi_data();
    if($data['topic_id_check']== 1)
    {?>
   <div class="alert alert-danger">      
     <strong>Already exists!</strong> If you want to change please Update Or Edit.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>
   <?php  
   $data['update_study'] = $this->Insert_model->edit_study();
      $this->load->view('Admin/update_study_contains',$data);
   
    }
    else
    {

      $data['update_study'] = $this->Insert_model->insert_study_contain();?>
  <div class="alert alert-success">     
     <strong>Success!</strong> Data successfully Inserted.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div><?php
    $data['update_study'] = $this->Insert_model->edit_study();
      $this->load->view('Admin/update_study_contains',$data);
    }
  }
   public function delete_topics()
   {
        $_SESSION["topic_id"]=$_GET['topic_id'];
    $data['delete_topics'] = $this->Insert_model->check_multi_data();
    if($data['delete_topics'] == 1)
    {
     
     ?> <div class="alert alert-danger">      
     <strong>Stop!</strong> Topic Realetd are prentent you can not delete it.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>
  
  <meta http-equiv="refresh" content="3;http://guzo.in/quiz/index.php/Insert_controlle" />
   <?php

    }
    else
    {$data['delete_topics'] = $this->Insert_model->delete_topics();
  ?>
   <div class="alert alert-success">     
     <strong>Success!</strong> Topic successfully Delete.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>
  
    <meta http-equiv="refresh" content="3;http://guzo.in/quiz/index.php/Insert_controller" />
   <?php
    }
   }
   public function update_study_contain()
  {
    $data['update_study'] = $this->Insert_model->update_study_contain(); 
    ?>
   <div class="alert alert-success">     
     <strong>Success!</strong> Topic successfully Update.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>
   <?php 
    $data['update_study'] = $this->Insert_model->edit_study();
      $this->load->view('Admin/update_study_contains',$data);
   }
   public function Insert_class(){

  $this->Insert_model->Insert_class();
   redirect('Admin_controller');
     }
      public function Insert_class_admin(){
    
  $this->Insert_model->Insert_class();
   redirect('http://localhost/question_bank/index.php/Admin_controller_new/admin_to_self');
     }

}
