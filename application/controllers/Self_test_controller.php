<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Self_test_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('Test/class_test_home');
	}
}
