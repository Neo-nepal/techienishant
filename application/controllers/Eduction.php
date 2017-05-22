<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eduction extends CI_Controller {
function __construct()
	{
		parent::__construct();
            
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
       

	}


	public function index()
	{

	$this->load->view('Eduction/Eduction');
	 }
    public function study_contain()
	{  	$data['class'] = $this->Eductional_model->fetch_class_from_db();
		$this->load->view('Eduction/Eduction',	$data);
	}
	public function fetch_class_from_db()
	{
		$data['class'] = $this->Eductional_model->fetch_class_from_db();
				$this->load->view('Eduction/Eduction',$data);
     
    }

    public function fetch_subject_from_db()
	 {
		$_SESSION['class_id'] = $class_id = $_GET['class_id'];
	     $data['subject'] = $this->Eductional_model->fetch_subject_from_db($class_id);
	     ?><span id="top_of_the_page"> <h4><span id="back_button"><a href="http://localhost/question_bank/index.php/Eduction/fetch_class_from_db"> <img src="http://localhost/question_bank/assetes/Image/back.svg"> </a></span> Select Subject</h4></span>
     <hr>
	      <?php
	     foreach ($data['subject'] as $key) 
	     {
	      $subject ="<h5>". $key->suject_name."</h5>";
	      $subject_id = $key->subject_id;
	      echo ' <a href="javascript:void(0)"><span id="folder" onclick="Select_topics('.$subject_id.')"><img src="http://aimclasses.esy.es/assites/image/floder.png"  height="100px">'.$subject.'</span></a>';
         }
	 }
	     public function fetch_subject_from_db1()
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
	 public function fetch_topics_from_db()
	 {

	 	$class_id = $_SESSION['class_id'];
	 	$_SESSION['subject_id'] = $subject_id = $_GET['subject_id'];
	 	$data['topics'] = $this->Eductional_model->fetch_topics_from_db($subject_id);
	 	?><span id="top_of_the_page"> <h4><span id="back_button" onclick="Select_subject(<?php echo $class_id; ?>)"> <a href="javascript:void(0)"><img src="http://localhost/question_bank/assetes/Image/back.svg"></a></span> Select Tpoic</h4> </span>
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
	 }


	 function total_student_and_details()
	 {
	  $data['Studens'] = $this->Eductional_model->total_student_and_details();
	 foreach ($data['Studens'] as $key) 
	     {
	      $stuent_first_name ="<h5>". $key->username. "</h5>";
	      $picture = $key->image;
	      echo '<span id="student_profile"><img src="data:image/png;base64,' . base64_encode($picture) . '" />'.$stuent_first_name .'</span>';

         }
	 }

	public function deadlines()
	 {
	 	$data['deadlines'] = $this->Eductional_model->deadlines();
	 ?>
	 <div id="deasines">
	  <table>
	  	<tr>
	  		<th>What</th>
	  		<th>From</th>
	  		<th>To</th>
	  		<th>Action</th>
	  	</tr>
	  	<?php foreach ($data['deadlines'] as $key) 
	     {?>
	      <tr>
	        <td><?php echo $key->topic; ?> </td>
	        <td><?php echo $key->from1; ?></td>
	        <td><?php echo $key->to1; ?></td>
	      <?php $deadlines_id =  $key->deadlines_id; ?>
	        <td><span id="delete" onclick="delete_deadline(<?php echo  $deadlines_id ?>)"><a href="javascript:void(0)"><img src="<?= base_url();?>assites/image/Delete.png"> </span></a></td>
        </tr>
        <?php }?>

	  	
  <tr>
	  </table>
	  <hr>
	  <span id="new_deadlines" onclick="toggle_visibility('Insert_and_update')"><a href="javascript:void(0)"><img src="<?= base_url();?>assites/image/pl.jpg"> Add new deadlines</span></a>
	  <div id="Insert_and_update">
	    
	<table>
	  	<tr>
	  		<th>What</th>
	  		<th>From</th>
	  		<th>To</th>
	  		<th>Action</th>
	  	</tr>
	  	<tr>
	  		<td><input  type="text"  id="topic"> </input> </td>
	  		<td><input  type="Date"  id="from1"> </input></td>
	  		<td><input  type="Date" id ="to1"> </input></td>
	  		
	  		<th><button class="btn btn-success" onclick="add_deadlines()">Submit</button> </th>
	  	</tr>
	  	
	  </table>
	  	
	
	  </div>
	
	 	
	 </div>
	 	<?php
	 } 
	public function Eduction_page()
	{
		$this->load->view('Eduction/Eduction');
	}
	public function explain()
	{
	
    $class_id =  $this->uri->segment(3);
  $_SESSION['topic_idas'] = $_POST['topic_id'];
		$data['explain'] = $this->Eductional_model->explain($class_id);
		
		$this->load->view('Eduction/explain',$data);
	
	}
	public function add_deadlines()
	{
     $this->Eductional_model->add_deadlines();
     $this->deadlines();
	}
	public function delete_deadline()
	{
		 $this->Eductional_model->delete_deadline();
		 $this->deadlines();
	}
	 public function fetch_topics_from_db_admin()
	 {

	 	$class_id = $_SESSION['class_id'];
	 	$_SESSION['subject_id'] = $subject_id = $_GET['subject_id'];
	 	$data['topics'] = $this->Eductional_model->fetch_topics_from_db($subject_id);
	 	?><span id="top_of_the_page"> <h4><span id="back_button" onclick="Select_subject(<?php echo $class_id; ?>)"> <a href="javascript:void(0)"><img src="http://localhost/question_bank/assetes/Image/back.svg"></a></span> Select Tpoic</h4> </span>
     <hr>
	 	 <?php
	 	foreach ($data['topics']  as $key) {
	 		$topics = "<h4>". $key->topic_name."</h4>";
	 	   $_SESSION['topic_idas'] =  $topic_id=$key->topic_id;
	 	     


	      ?>
         <div  class="topics">
           <form action="<?= base_url();?>index.php/Admin_controller_new/Study_Cantains" id="theForm" method="post">
           <?php 
            echo ' <a href="javascript:void(0)"><span  onclick="explain()">'.$topics.'</span></a>';

            
           ?><br/>
           <input type="hidden" name="topic_id" value="<?php  echo $topic_id ?>">
           	<button class="btn btn-success">Read more..</button>
           </form>
         	
         </div>

	      <?php
	      
	 	}
	 }

	  public function fetch_topics_from_db_admin1()
	 {

	 	$class_id = $_SESSION['class_id'];
	 	$_SESSION['subject_id'] = $subject_id = $_GET['subject_id'];
	 	$data['topics'] = $this->Eductional_model->fetch_topics_from_db($subject_id);
	 	?>

	 	 <?php
	 	foreach ($data['topics']  as $key) {
	 		$topics = "<h4>". $key->topic_name."</h4>";
	 	   $_SESSION['topic_idas'] =  $topic_id=$key->topic_id;
	 	     


	      ?>
         <div  class="topics">
           <form action="<?= base_url();?>index.php/Admin_controller_new/Study_Cantains" id="theForm" method="post">
           <?php 
            echo ' <a href="javascript:void(0)"><span  onclick="explain()">'.$topics.'</span></a>';?>
           <input type="hidden" name="topic_id" value="<?php  echo $topic_id ?>">
           	<button class="btn btn-defult">Action</button>
           </form>
         	
         </div>

	      <?php
	      
	 	}
	 }
}








?>
<script type="text/javascript">
function toggle_visibility(id) 
{
    var e = document.getElementById(id);
    if (e.style.display == 'none' || e.style.display=='')
    {
        e.style.display = 'block';
    }
    else 
    {
        e.style.display = 'none';
    }
}
</script>

	