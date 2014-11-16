<!DOCTYPE html>
<html>
  <head>
  
  <?php include "comp/head.php" ?>
    
  </head>
  <body id="empresas">
  
    <section class="container">
      <div class="content row">
        <?php include "comp/header.php"; ?>
      </div>
 <section class="col col-lg-6">
 	<div class="framebutoes content row">
	 	<a class="btn btn-primary btn-large butoesmenu" data-toggle="modal" data-target="#myModal2">Novo Registo</a>
	 	<a class="btn btn-primary btn-large butoesmenu" data-toggle="modal" data-target="#myModal">Editar</a>
	 	<a id="apagarempbutton" class="btn btn-primary btn-large butoesmenu" href="apagarempresa.php">Apagar</a>

 	</div>
 	<div class="listaemp">
	 <?php include "comp/getenterprises.php"; ?>
 	</div>
 	
 </section>
 <section id="gestaoempresas" class="col col-lg-6">
  </section>
  <section id="editarpopup">
	 </section>
   <section id="registarpopup"><?php include "comp/registarempresa.php"; ?></section>
    <?php include "comp/scripts.php" ?>
  </body>
</html>