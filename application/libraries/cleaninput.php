<?php

	class Cleaninput{

		
		function clean($input) {

			$search = array(
				'@<script[^>]*?>.*?</script>@si',   // Strip out javascript
				'@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
				'@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
				'@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
			);

			$output = preg_replace($search, '', $input);
			return $output;
		}
		
	 function formatStatus($str){

	 	/*
		$str = preg_replace(
		'/((ftp|https?):\/\/([-\w\.]+)+(:\d+)?(\/([\w\/_\.]*(\?\S+)?)?)?)/i',
		'<a href="$1" class="link" target="_blank">$1</a>',
		$str
		);
		*/
	 	
	 	$str = preg_replace("#(^|[\n ])([\w]+?://[\w]+[^ \"\n\r\t< ]*)#", "\\1<a href=\"\\2\" target=\"_blank\">\\2</a>", $str);
		$str = preg_replace("#(^|[\n ])((www|ftp)\.[^ \"\t\n\r< ]*)#", "\\1<a href=\"\\2\" target=\"_blank\">\\2</a>", $str);	
	 	
	 	//$str = preg_replace("#(^|[\n ])([\w]+?://[\w]+[^ \"\n\r\t<]*)#ise", "'\\1<a href=\"\\2\" >\\2</a>'", $str);
		//$str = preg_replace("#(^|[\n ])((www|ftp)\.[^ \"\t\n\r<]*)#ise", "'\\1<a href=\"http://\\2\" >\\2</a>'", $str);
		
		$str = preg_replace(
		'/(\s|^)@([\w\-]+)/',
		'$1<a class="mention" href="http://twitter.com/#!/$2" target="_blank">@$2</a>',
		$str
		);
		
		$str = preg_replace(
		'/(\s|^)#([\w\-]+)/',
		'$1<a class="hash" href="http://twitter.com/search?q=%23$2" target="_blank">#$2</a>',
		$str
		);
		
		return $str;
		
	} 
	
	function formatTime($time){
		$divisions = array(1,60,60,24,7,4.34,12);
		$names = array('second','minute','hour','day','week','month','year');
		$time = time() - strtotime($time);
		$name = "";
		
		if ($time < 10) return 'just now';
		
		for($i=0; $i<count($divisions); $i++){
			if ($time < $divisions[$i]) break;
			$time = $time / $divisions[$i];
			$name = $names[$i];
		}
		
		$time = round($time);
		if ($time != 1) $name .= 's';
		
		return $time.$name.' ago';
		
	}
	
	function nl2br_limit($string, $num){
		return preg_replace('/\n/', '<br/>', preg_replace('/(\s{'.$num.'})\s+/','$1', $string));
    }
		
	}

?>