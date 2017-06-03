
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
       $data['Answer'] = $this->Online_test_result_model->get_answer();
        foreach ( $data['Answer'] as $ans) {
                  $i++;	
                if ($_POST[$i] == $ans->ANS) {
                  	
                  echo $_POST[$i] ;
                  echo $ans->ANS ;
                  } 
                  
              }
    }


}?>

