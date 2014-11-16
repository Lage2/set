<?php
	include "../util/SETDB.php";

	$db_connection = new SETDB();

	$speakersNames = array();

	$db_connection->forEachSpeakerCall(function($name, $description) use (&$speakersNames){
		$speakersNames[$name] = $name;
	});

	echo json_encode($speakersNames);
?>