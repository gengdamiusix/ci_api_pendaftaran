<?php


class Service_Model extends CI_Model{
	
	
	
	
	function base64ToImage($base64_string, $output_file) {
		    

		$imageStr = base64_decode($base64_string);
		$img = imagecreatefromstring($imageStr);

		imagepng($imageStr, $output_file);
	
		return $output_file;
	}
	
	
}
	
	?>