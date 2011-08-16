<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
	
	function Test1(){
		parent::__construct();
	}
	
	function index(){
		$this->load->view('test1/home_test');
	}
	
}

?>