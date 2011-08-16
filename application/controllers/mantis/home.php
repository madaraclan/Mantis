<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
	
	function Home(){
		parent::__construct();
		$this->load->model('mantis/users_model');
		
		$this->users_model->DataUserLogin();
	}
	
	function index(){
		
		$KPUID = $this->session->userdata('KPUID');
		
		$data['KPUID'] = $KPUID;
		
		$this->load->view('mantis/home', $data);
	}
	
}

?>