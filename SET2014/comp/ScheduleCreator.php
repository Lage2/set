<?php
function createSlot($numberOfColumnsOccupied, $title, $description) {
    static $id = 0;

    echo '<td class="has-events" data-toggle="modal" data-target="#slot' . $id . '"' . ($numberOfColumnsOccupied > 1?' colspan="' . $numberOfColumnsOccupied . '"':'') . '><span class="title">' . $title . '</span></td>';
    echo '<div class="modal fade" id="slot' . $id++ . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel">' . $title . '</h4></div><div class="modal-body">' . $description . '</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>';
}

function createScheduleOfDay($day) {
    echo '<table class="calendar table table-bordered"><thead><tr><th width="20%">&nbsp;</th>';
    $db_connection = new SETDB();
    $numberOfRooms = 0;
    $db_connection->forEachRoomCall(function($sala) use (&$numberOfRooms) {
        echo '<th width="20%">' . $sala . '</th>';
        $numberOfRooms++;
    });
    echo '</tr></thead> <tbody>';

    $counter = 0;
    $previousName = 0;
    $previousDescription = null;
    $columnCounter = 0;

    $bodyFunction = function($name, $startTime, $endTime, $description) use (&$counter, &$previousName, &$previousDescription, &$columnCounter, $numberOfRooms) {
        if($columnCounter == 0) {
            $previousName = $name;
            $previousDescription = $description;
        }

        if($counter == 0) {
            echo '<tr><td>' . $startTime . ' - ' . $endTime . '</td>';
        }

        if(strcmp($name, $previousName)) {
            createSlot($columnCounter, $previousName, $previousDescription);
            $previousName = $name;
            $previousDescription = $description;
            $columnCounter = 1;
        } else { $columnCounter++; }

        if($name === null) {
            echo '<td class="no-events"></td>';
            $columnCounter = 0;
        } 

        if($counter == ($numberOfRooms - 1)) {
            if($columnCounter > 0) {
                createSlot($columnCounter, $name, $description);
                $columnCounter = 0;
            }
            echo '</tr>';
        }

        $counter = ($counter + 1) % $numberOfRooms;
    };

    $db_connection->forEachSlotOnDayCall($day, $bodyFunction);

    echo '</tbody></table>';
}
?>

    
