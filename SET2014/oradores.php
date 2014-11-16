<!DOCTYPE html>
<html>
  <head>
    <?php include "comp/head.php" ?>
  </head>
  <body id="oradores">

    <section class="container">
      <div class="content row">
        <?php include "comp/header.php"; ?>
        
        <section class="col col-sm-2 col-md-2 col-lg-2">
          <?php include "comp/oportunidades.php"; ?>
        </section>

        <section class="main col-sm-7 col-md-7 col-lg-7">
          <div >

               <ul>
                <?php
                  $db_connection = new SETDB();
                  
                  $db_connection->forEachSpeakerCall(function($name, $description, $imagePath) {
                    echo '<li class="galeria row"><img src="' . $imagePath . '" class="imagemgaleria col col-xs-4 img-responsive img-rounded" alt="A image" width="100" height="100"/><h3>' . $name . '</h3><p class="descriptionspeaker">' . $description . '</p></li>';
                  });
                ?>
               </ul>

            </div> 
        </section>

        <section class="col col-sm-3 col-md-3 col-lg-3">
          <?php include "comp/sidebar.php"; ?>
        </section>
      </div>
      <?php include("comp/footer.php"); ?>
    </section>
    <?php include "comp/scripts.php" ?>
  </body>
</html>