<!DOCTYPE html>
<html>
  <head>
  
  
<?php
	include("comp/specialhead.php");
    session_start();
    if(isset($_POST['user']) && isset($_POST['passwd'])){ 
    	if(strcmp($_POST['user'], "setmanagement") || strcmp($_POST['passwd'], "setmanagementQE6u")) {
			echo('<script>alert("Autenticação incorrecta");</script>');
			header("refresh:1;url=index.php");
			session_destroy();
			die();
		 } else {
			 $_SESSION['utilizador']=9979898; 
		 }
	}  
	 ?>

    
  </head>
  <body id="management">

    <section class="container">
      <div class="content row">
        <?php include "comp/header.php"; ?>

		<?php $temp=(isset($_GET["m"]) && isset($_GET["y"])); ?>
		 
      </div>
        <section class="main col col-lg-12">
        <div id="logo">
			<h1>Estatisticas</h1>
		</div>
         <ul class="nav nav-tabs nav-justified" id="tabstats">
                <li <?php echo($temp?"":"class=\"active\""); ?>><a href="#geral" data-toggle="tab">Gerais</a>
                </li>
                
                <li <?php echo($temp?"class=\"active\"":""); ?>><a href="#historico" data-toggle="tab">Histórico</a>
                </li>
      
          </ul>
            
            <div id="tab-content-stats" class="tab-content">
                <div class="tab-pane <?php echo($temp?"":"active"); ?>" id="geral">
                    <?php include "../analytics/stats.php"; ?>
                </div>
                
                <div class="tab-pane <?php echo($temp?"active":""); ?>" id="historico">
              
                    <?php include "../analytics/history.php"; ?>

                </div>
     </div>
        </section>

 
    </section>
    <?php include "comp/scripts.php" ?>
  </body>
</html>