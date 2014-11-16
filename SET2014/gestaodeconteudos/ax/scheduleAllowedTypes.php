<?php
	include "../util/SETDB.php";

	$db_connection = new SETDB();

	echo json_encode($db_connection->getScheduleAllowedTypes());
?>