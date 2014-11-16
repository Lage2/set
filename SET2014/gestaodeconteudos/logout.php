<?php

	  if(!isset($_SESSION['utilizador'])){
	  	session_start();
		session_destroy();
		echo('<script>alert("Logout feito com sucesso!");</script>');
		header("refresh:1;url=index.php");
		die();	 
   }

?>  
  