<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajaxstatus extends CI_Controller{
	
	function Ajaxstatus(){
		parent::__construct();
		$this->load->model('mantis/status_model');
	}
	
	function ShareStatus(){
		$KPSID = (int) substr(time(), 6) + rand(10000, 1000000);
		$KPUID = $this->input->post('KPUID');
		$KPSMessage = $this->input->post('KPSMessage');
		$KPSMessage = str_replace("\r\n", "<br />", $KPSMessage);
		$this->status_model->ShareStatus(array(
			'KPSID' => $KPSID,
			'KPUID' => $KPUID,
			'KPSMessage' => $KPSMessage
		));
		$GetStatus = $this->status_model->GetStatus($KPSID);
		echo json_encode($GetStatus);
	}
	
	function GetStatusAll(){
		$KPUID = $this->input->get('KPUID');
		$Start = $this->input->get('Start');
		$PerPage = $this->input->get('PerPage');
		$Statuses = $this->status_model->GetStatusAll($KPUID, $Start, $PerPage);
		echo json_encode($Statuses);
	}
	
}

?>