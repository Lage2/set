<?php
/*
Server-side PHP file upload code for HTML5 File Drag & Drop demonstration
Featured on SitePoint.com
Developed by Craig Buckler (@craigbuckler) of OptimalWorks.net
*/
$fn = (isset($_SERVER['HTTP_X_FILENAME']) ? $_SERVER['HTTP_X_FILENAME'] : false);
$mt = microtime () ;

if ($fn) {

	// AJAX call
	$fn = $mt . $fn;
	file_put_contents(
		'gestaodeconteudos/uploads/' . $fn,
		file_get_contents('php://input')
	);
	echo "$fn uploaded";
	exit();

}
else {

	// form submit
	$files = $_FILES['fileselect'];

	foreach ($files['error'] as $id => $err) {
		if ($err == UPLOAD_ERR_OK) {
			$fn = $files['name'][$id];
			$fn = $mt . $fn;
			move_uploaded_file(
				$files['tmp_name'][$id],
				'gestaodeconteudos/uploads/' . $fn 
			);
			print '<script type="text/javascript">'; 
			print 'alert("Ficheiro submetido com sucesso!")'; 
			print '</script>';
			header("refresh:0;url=index.php");
		}
	}

}