<!DOCTYPE html>
<html>
  <head>
  
  <?php include "comp/head.php" ?>
    
  </head>
   <body id="curriculos">
  
    <section class="container">
      <div class="content row">
        <?php include "comp/header.php"; ?>
      </div>
	  <section class="main col col-lg-12">
   
  <h3 class= "curriculo">Currículos Submetidos</h3>
  <ul class="dmxtree" id="FolderView" type="none">
  

  <?php include ("comp/gescurriculos.php"); ListFolder("uploads"); ?>
  </ul>
  <p> <img src="img/download.png" alt="download" align="center">
  <a class = "download" align="center" href="download.php">Download </a>
  </p>

	  </section>
     </section>
    <?php include "comp/scripts.php" ?>

  </body>
</html>

