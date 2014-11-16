<?php
    include "../util/SETDB.php";
    include "../util/security.php";


    $nif = setArrayIfSet($_POST, 'nif');
    $nome = setArrayIfSet($_POST, 'nome');
    $morada = setArrayIfSet($_POST, 'morada');
    $localidade = setArrayIfSet($_POST, 'localidade');
    $cp = setArrayIfSet($_POST, 'cp');
    $telefone = setArrayIfSet($_POST, 'telefone');
    $fax = setArrayIfSet($_POST, 'fax');
    $email = setArrayIfSet($_POST, 'email');
    $site = setArrayIfSet($_POST, 'site');

    $uploadedLogo = setArrayIfSet($_FILES, 'myPhoto');

    $db_connection = new SETDB();

    try {
        $db_connection->registerNewCompany($nif, $nome, $morada, $localidade, $cp, $telefone, $fax, $email, $site, $uploadedLogo);
    }catch(Exception $e) {
        ajaxError($e->getMessage());
    }
    

    $json_response = array("nif" => $nif, "name" => $nome);
    echo(json_encode($json_response));
?>