<!DOCTYPE html>
<html>
  <head>
  
  <?php include "comp/head.php" ?>
    
  </head>
  <body id="patrocinios">
  
    <section class="container">
      <div class="content row">
        <?php include "comp/header.php"; ?>
      </div>
 <section class="col col-lg-6">
  <div class="framebutoes content row">
    <a class="btn btn-primary btn-large butoesmenu" data-toggle="modal" data-target="#registercontributionModal" >Inserir Novo Patrocínio</a>
  </div>
  <div class="listapatrocinios">
  <?php include "comp/getpatrocinios.php"; ?>
  </div>
  
 </section>
 <section id="gestaopatrocinios" class="col col-lg-6">
  </section>
  <section id="editarpatrociniopopup">
   </section>
   <section id="apagarpatrociniopopup">
   </section>
    <?php include "comp/scripts.php" ?>
    <?php include "ax/registarpatrocinio.php" ?>
  </body>
</html>