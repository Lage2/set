<!DOCTYPE html>
<html>
  <head>
    <?php include "comp/head.php" ?>
  </head>
  <body id="oportunidade">

    <section class="container">
      <div class="content row">
        <?php include "comp/header.php"; ?>
        
        <section class="col col-sm-2 col-md-2 col-lg-2">
          <?php include "comp/oportunidades.php"; ?>
        </section>

        <section class="main col-sm-7 col-md-7 col-lg-7">
          <div class="descricaooportunidade">
               <?php $id = $_GET['id'];
                  $db_connection = new SETDB();

                  $infoFromChance = $db_connection->getInfoFromChanceWithId($id);

                  if(!isset($infoFromChance)) {
                    echo '<h3>Oportunidade não identificada.</h3>';
                  } else {
                    $title = $infoFromChance['Title'];
                    $fullDescription = $infoFromChance['Description'];
                    $image = $db_connection->getImageFileFromChanceWithId($id);
                    if($image)
                      echo '<h3>' . $title . '</h3><img class="imgoportunidades img-responsive" src="' . $image . '" alt="imagem"/>' . $fullDescription;
                    else
                       echo '<h3>' . $title . '</h3>' . $fullDescription;
         
                  }
              ?>
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