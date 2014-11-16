<title>SET 2014 - Gestão de Conteúdos</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/gestao.css">
<link rel="stylesheet" href="css/chosen.css">
<link rel="stylesheet" href="css/chosen.min.css">
<link rel="stylesheet" href="../analytics/chilistats.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/signin.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<?php
  session_start();
if(!isset($_SESSION['utilizador'])){
  header("refresh:1;url=index.php");
  session_destroy();
  die();
}
?>