<?php
	include "../util/security.php";
	include "../util/SETDB.php";

	$infoToUpdate = setArrayIfSet($_POST, 'name');
	$room = setArrayIfSet($_POST, 'room');
	$date = setArrayIfSet($_POST, 'date');
	$startTime = setArrayIfSet($_POST, 'startTime');
	$endTime = setArrayIfSet($_POST, 'endTime');
	$newValue = setArrayIfSet($_POST, 'value');

	$db_connection = new SETDB();
	
	switch ($infoToUpdate) {
		case 'name':
			$db_connection->setSlotNameOnDay($date, $room, $startTime, $endTime, $newValue);
			break;
		case 'type':
			$db_connection->setSlotTypeOnDay($date, $room, $startTime, $endTime, $newValue);
			break;
		case 'speaker':
			$db_connection->setSlotSpeakerOnDay($date, $room, $startTime, $endTime, $newValue);
			break;
		case 'startTime':
			$db_connection->setSlotStartTimeOnDay($date, $room, $startTime, $endTime, $newValue);
			break;
		case 'endTime':
			$db_connection->setSlotEndTimeOnDay($date, $room, $startTime, $endTime, $newValue);
			break;
		case 'room':
			$db_connection->setSlotRoomOnDay($date, $room, $startTime, $endTime, $newValue);
			break;
		case 'description':
			$db_connection->setSlotDescriptionOnDay($date, $room, $startTime, $endTime, $newValue);
			break;
		default:
			ajaxError('Cannot update that value.');
			break;
	}
?>