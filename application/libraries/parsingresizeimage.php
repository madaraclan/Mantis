<?php
	
	class Parsingresizeimage{
		
		public $CI;
		
		function Parsingresizeimage(){
			$this->CI =& get_instance();
			$this->CI->load->library('resizeimage');
		}
		
		function getExt($str){
			$i=strrpos($str,".");
			if (!$i) return "";
			$j=strlen($str)-$i;
			$ext=substr($str,$i+1,$j);
			return $ext;
		}
		
		function save_image($name, $tmp, $width, $height, $type, $location , $name_image = ''){
			$this->CI->resizeimage->__Resizeimage($name,$tmp);
			
			if ($name_image == ''){
			$token=md5(substr(md5($_SERVER['REMOTE_ADDR'].microtime().rand(1,100000)),0,6));
			$name_image = 'img'.$token.'.jpg';
			}
			
			$this->CI->resizeimage->createresizeImage($width, $height, $type); //exact, portrait, landscape, auto, crop
	
			$this->CI->resizeimage->saveImage($name_image, 100, $location);
			
			return $name_image;
		}
		
	}

?>