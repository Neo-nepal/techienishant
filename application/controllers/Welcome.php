<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('Home');
	}
   public function Admin_test_view()
	{
       
       $this->load->view('Admin test/Admin_test_view');
   }
 public function massage()
 {
 	$this->Insert_model->massage();
 	$this->load->view('Home');
 }

}
