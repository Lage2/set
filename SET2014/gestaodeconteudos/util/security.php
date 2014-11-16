<?php
	function setArrayIfSet($array, $position) {
		return isset($array[$position])?$array[$position]:null;
	}

	function ajaxError($description) {
		http_response_code(404);
		
		exit($description);
	}
?>