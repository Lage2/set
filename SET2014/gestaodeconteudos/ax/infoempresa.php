<div class="panel panel-primary">
    
<?php
	include "../util/SETDB.php";

	$nif = $_POST['nif'];

	$db_connection = new SETDB();
	              
	$arrayWithInfo = $db_connection->getInfoFromCompanyWithNif($nif);
?>

<div class="panel-heading">Informação da Empresa</div>

<?php
    foreach($arrayWithInfo as $nome => $valor){
        echo('<div class="panel-body">');
		echo ('<strong>' . $nome . '</strong>' . ': ');
        echo($valor);
        echo('</div>');
	}
?>
   
</div>