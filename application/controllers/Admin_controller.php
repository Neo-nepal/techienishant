
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

  public function index()
  {
    $data['classes'] = $this->Admin_model->get_classes();
    $data['topics'] = $this->Admin_model->get_topics();
    $data['questions'] = $this->Admin_model->get_questions();
    $data['subjects'] = $this->Admin_model->get_subjects();
    $data['Get_all_data'] = $this->Admin_model->Get_all_data();
    $data['admin_test_details'] = $this->Admin_model->admin_test_details();
    $data['admin_data'] = $this->Admin_model->users();
    $data['class'] = $this->Admin_model->classes();
    $data['massage_get'] = $this->Admin_model->massage_get();
	$data['link_en_di_able'] = $this->Admin_model->get_link_en_di_able();
    $this->load->view('Admin/Admin',$data);
  }



  public function Insert_que_ans()
  {     
   $_SESSION['topic_id'] = $_POST['neo'];
    $this->load->view('Admin/Insert_ques_ans');
  }
  public function Transfer_admin_to_self()
  {     
   $_SESSION['topic_id'] = $_POST['neo'];
   $data['Get_all_data'] = $this->Admin_test_model->Get_all_data();
        foreach ( $data['Get_all_data']  as $key) {
           $_SESSION['quesations']=$key->quesations;
           $_SESSION['A']= $key->A;
          $_SESSION['B']=$key->B;
         $_SESSION['C']= $key->C;
           $_SESSION['D']= $key->D;
           $_SESSION['ans']=$key->ANS;
        $data['admin_data'] = $this->Insert_model->Transfer_admin_to_self();
        }
        if ( true) {
    $data['admin_data1'] = $this->Insert_model->delete_admn_que();
   }
      $this->index();

  }

  public function Contants()
  {
  
     $this->load->view('Contacts');
  }

  public function load_topic(){
    
       $this->load->view('Admin/Insert_topic');
  }
  public function load_topic_admin(){
    
       $this->load->view('Admin/Insert_topic_admin');
  }
  
  public function Insert_subjects(){
    
       $this->load->view('Admin/Insert_subjects');
  }
    public function Insert_subjects_admin(){
    
       $this->load->view('Admin/Insert_subjects_admin');
  }
  public function Insert_eduction(){
      
  $data['class'] = $this->Eductional_model->fetch_class_from_db();
        $this->load->view('Admin/Eduction',$data);
  }
  public function Study_Cantains(){
    $_SESSION['topic_id'] = $_POST['topic_id'];
    $data['update_study'] = $this->Insert_model->edit_study();
   $this->load->view('Admin/update_study_contains',$data);
  }
  public function admin_to_self()
  {      $data['Get_all_data'] = $this->Admin_test_model->Get_all_data();
    $data['classes'] = $this->Question_model->get_classes();
     $this->load->view('Admin/Transfer_admin_to_self',$data);

  }
  public function Transfer_self_to_admin()
  {
    $data['classes'] = $this->Question_model->get_classes();
    $this->load->view('Admin/Transfer_self_to_admin',$data);
  }
  public function Select_question_for_admin()
  {
   $_SESSION['topic_id'] =$_POST['neo'];
    $data['quesations'] = $this->Insert_model->Select_quesation();
  
      $this->load->view('Admin/Select_question_for_admin.php',$data);
  }
  public function checkbox()
  {    
    $data['quesations'] = $this->Insert_model->checkbox();
     if (true) {
      $data['quesations_admin'] = $this->Insert_model->Select_quesation_admin_test_transfer();
   foreach ($data['quesations_admin']  as $key) {
   $_SESSION['question_admin']= $key->quesations;
   $_SESSION['question_id']=$key->question_id;
     $_SESSION['A_admin']= $key->A;
       $_SESSION['B_admin']= $key->B;
         $_SESSION['C_admin']= $key->C;
           $_SESSION['D_admin']= $key->D;
             $_SESSION['ans_admin']= $key->ANS;
              $data['quesations_admin'] = $this->Insert_model->Admin_question_test_transfer();
               $data['quesations_admin'] = $this->Insert_model->Admin_question_test_transfer_delete();
     }
    $this->index();

  }

}
  /* public function fetch_subject_from_db1()
    {
      $_SESSION['class_id'] = $class_id = $_GET['class_id'];
      $data['subject'] = $this->Eductional_model->fetch_subject_from_db($class_id);
       ?>
           <table>
          <tr>
        <?php
       foreach ($data['subject'] as $key) 
       {
        $subject ="<h5>". $key->suject_name."</h5>";
        $subject_id = $key->subject_id;?>
       
            <td> <?php  echo ' <a href="javascript:void(0)"><span onclick="Select_topics1('.$subject_id.')"><img src="http://localhost/question_bank/assetes/Image/Subjects.png">'.$subject.'</span></a>';?></td>
        <?php
      
         }?>
          </tr>
        </table>
        <?php
    }
     public function fetch_topics_from_db1()
   {
    $_SESSION['subject_id'] = $subject_id = $_GET['subject_id'];
    $data['topics'] = $this->Eductional_model->fetch_topics_from_db($subject_id);
    ?><span id="top_of_the_page"> <h4><span id="back_button" onclick="Select_subject()"> <a href="javascript:void(0)"><img src="http://localhost/question_bank/assetes/Image/back.svg"></a></span> Select Tpoic</h4> </span>
     <hr>
     <?php
    foreach ($data['topics']  as $key) {
      $topics = "<h4>". $key->topic_name."</h4>";
       $_SESSION['topic_idas'] =  $topic_id=$key->topic_id;
         


        ?>
         <div  class="topics">
           <form action="<?= base_url();?>index.php/Eduction/explain/<?php  echo $topic_id ?>" id="theForm" method="post">
           <?php 
            echo ' <a href="javascript:void(0)"><span  onclick="explain()">'.$topics.'</span></a>';
            ?><input type="hidden" name="topic_id" value="<?php  echo $topic_id ?>">
            <button class="btn btn-defult">Go for read</button>
           </form>
          
         </div>

        <?php
        
    }
   }*/
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
 public function allow()
  {
	  
	  $this->Admin_model->allow();
	  $this->index();
  }

}
