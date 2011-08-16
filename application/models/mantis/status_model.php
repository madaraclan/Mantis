<?php

class Status_model extends CI_Model{
	
	function ShareStatus(array $data){
		$this->db->insert('kp_status', $data);
	}
	
	function GetStatus($KPSID){
		$query = $this->db
		->select('kp_status.*, 
		kp_users.KPUUsername, 
		kp_users.KPUName, 
		kp_users.KPUID,
		kp_users.KPUDetail,
		kp_users.KPUWebsite
		')
		->from('kp_status')
		->join('kp_users', 'kp_users.KPUID = kp_status.KPUID')
		->where('kp_status.KPSID', $KPSID)
		->get();
		;
		$return = '';
		$jml = $query->num_rows();
		if ($jml){
			$query = $query->result();
			$query = $query[0];
			$Time = $query->KPSDateTime;
			$_dt = date('j M Y G:i:s', strtotime($Time));
			
			$From = array(
				'StatusUsername' => $query->KPUUsername,
				'StatusName' => $query->KPUName,
				'StatusUsernameId' => $query->KPUID,
				'StatusUsernameDetail' => $query->KPUDetail,
				'StatusUsernameWeb' => $query->KPUWebsite
			);
			
			$return = array(
				'Status' => 1,
				'From' => $From,
				'StatusId' => $query->KPSID,
				'StatusTime' => $_dt,
				'StatusMessage' => $query->KPSMessage
									
			);
		}else{
			$return = array(
				'Status' => 0
			);
		}
		return $return;
	}
	
	function GetStatusAll($KPUID, $Start, $PerPage = 10){
		
		$query = $this->db
		->select('kp_status.*, kp_users.KPUUsername, kp_users.KPUName')
		->from('kp_status')
		->join('kp_users', 'kp_users.KPUID = kp_status.KPUID')
		->where('kp_status.KPUID', $KPUID)
		->get();
		;
		
		$jml = $query->num_rows();
		
		$query = $this->db
		->select('kp_status.*, 
		kp_users.KPUUsername, 
		kp_users.KPUName, 
		kp_users.KPUID,
		kp_users.KPUDetail,
		kp_users.KPUWebsite
		')
		->from('kp_status')
		->join('kp_users', 'kp_users.KPUID = kp_status.KPUID')
		->where('kp_status.KPUID', $KPUID)
		->order_by('KPSDateTime', 'desc')
		->limit($PerPage, $Start)
		->get();
		;
		
		$return = '';
		
		if ($jml){
			
			$statuses = $query->result();
			
			$return = array();
			
			foreach($statuses as  $status){
				
				$Time = $status->KPSDateTime;
				$_dt = date('j M Y G:i:s', strtotime($Time));
				
				$From = array(
					'StatusUsername' => $status->KPUUsername,
					'StatusName' => $status->KPUName,
					'StatusUsernameId' => $status->KPUID,
					'StatusUsernameDetail' => $status->KPUDetail,
					'StatusUsernameWeb' => $status->KPUWebsite
				);
				
				$return[] = array(
					'Status' => 1,
					'From' => $From,
					'StatusId' => $status->KPSID,
					'StatusTime' => $_dt,
					'StatusMessage' => $status->KPSMessage				
				);
				
			}
			
		}else{
			
			$return = array(
				'Status' => 0
			);
			
		}
		
		return $return;
				
		
	}
	
	
}

?>