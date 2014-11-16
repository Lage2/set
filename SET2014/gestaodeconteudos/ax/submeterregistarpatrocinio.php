<?php
    include "../util/SETDB.php";
    include "../util/security.php";

    $nif = setArrayIfSet($_POST, 'nif');
    $ano = setArrayIfSet($_POST, 'ano');
    $montante = setArrayIfSet($_POST, 'montante');

    $db_connection = new SETDB();

    try {
        $db_connection->RegisterContributionWithNif($nif, $ano, $montante);
    }catch(Exception $e) {
        ajaxError($e->getMessage());
    }

    $json_response = array("nif" => $nif, "name" =>  $nome, "ano"=> $ano);
    echo(json_encode($json_response));
?>