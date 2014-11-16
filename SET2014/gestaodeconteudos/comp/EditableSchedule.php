<?php
	include "util/SETDB.php";

function createEditableScheduleOnDay($day) {
	$db_connection = new SETDB();
	
	echo '<div class="table-responsive"><table class="table table-hover table-bordered tablesorter"><thead><tr><th width="10%">Nome</th><th width="10%">Tipo</th><th width="20%">Orador</th><th width="10%">Hora de Inicio</th><th width="10%">Hora de Fim</th><th width="10%">Sala</th><th width="30%">Descrição</th></tr></thead><tbody id="' . $day . '">';

	$db_connection->forEachSlotOnDayCall($day, function($name, $type, $speaker, $startTime, $endTime, $room, $description) {
		echo '<tr>';
		echo '<td><a class="editable" href="#" data-name="name" data-type="text" data-url="ax/editSchedule.php" data-title="Enter name">' . $name . '</a></td>';
		echo '<td><a class="editable" href="#" data-name="type" data-type="select" data-url="ax/editSchedule.php" data-title="Enter name" data-value="' . $type . '">' . $type . '</a></td>';
		echo '<td><a class="editable" href="#" data-name="speaker" data-type="select" data-url="ax/editSchedule.php" data-title="Enter name" data-value="' . $speaker . '">' . $speaker . '</a></td>';
		echo '<td><a class="editable" href="#" data-name="startTime" data-type="text" data-url="ax/editSchedule.php" data-title="Enter name">' . $startTime . '</a></td>';
		echo '<td><a class="editable" href="#" data-name="endTime" data-type="text" data-url="ax/editSchedule.php" data-title="Enter name">' . $endTime . '</a></td>';
		echo '<td><a class="editable" href="#" data-name="room" data-type="text" data-url="ax/editSchedule.php" data-title="Enter name">' . $room . '</a></td>';
		echo '<td><a class="editable" href="#" data-name="description" data-type="textarea" data-url="ax/editSchedule.php" data-title="Enter name">' . $description . '</a></td>';
		echo '</tr>';
	}, true);

	echo '</tbody></table></div>';
}
?>