<?php
	
	function date_mysql($time = null){
		if (!$time){
			$time = time();
		}
		return date('Y-m-d H:i:s', $time);
	}

?>