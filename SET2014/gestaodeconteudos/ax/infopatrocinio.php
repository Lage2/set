<div class="panel panel-primary">
    
<?php
	include "../util/SETDB.php";

	$nif = $_POST['nif'];

	$db_connection = new SETDB();
	              
	$arrayWithInfo = $db_connection->getContributionFromCompanyWithNif($nif);
?>

<div class="panel-heading">Informação do Patrocínio</div>

<?php
    foreach($arrayWithInfo as $nif => $valor){
        echo('<div class="panel-body">');
		echo ('<strong>' . $nif . '</strong>' . ': ');
        echo($valor);
        echo('</div>');
	}
?>
   
</div>