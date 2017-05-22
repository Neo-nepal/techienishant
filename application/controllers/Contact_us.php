<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	public function index()
	{
     $this->load->view('Contacts');
	}
	   public function massage()
	{
	$this->Insert_model->massage();
       ?>  <div style=" color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;" class="alert alert-success">     
     <strong>Success!</strong> Massage successfully Send...
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div><?php 
  if ($_GET['home']==1) {
  	   header( "refresh:0;url=".base_url());
  } else
  {
  	  header( "refresh:0;url=".base_url().'index.php/Contact_us');
  }
  
   

    }

}
