<!DOCTYPE html>
<html>
  <head>
    <?php
      include "comp/head.php";
      include "comp/ScheduleCreator.php";
    ?>
  </head>
  <body id="programa">

    <section class="container">
      <div class="content row">
        <?php include "comp/header.php"; ?>
        
        <section class="col col-sm-2 col-md-2 col-lg-2">
          <?php include "comp/oportunidades.php"; ?>
        </section>

        <section class="main col-sm-7 col-md-7 col-lg-7">
          <h3 class="titulospaginas">Programa</h3>
            
            <!-- Nav tabs -->
            <ul class="nav nav-pills nav-justified">
              <li class="active"><a href="#dia5" data-toggle="tab">Dia 5</a></li>
              <li><a href="#dia6" data-toggle="tab">Dia 6</a></li>
              <li><a href="#dia7" data-toggle="tab">Dia 7</a></li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="dia5"> <?php createScheduleOfDay('2014-03-05'); ?> </div>
              <div class="tab-pane" id="dia6"> <?php createScheduleOfDay('2014-03-06'); ?> </div>
              <div class="tab-pane" id="dia7"> <?php createScheduleOfDay('2014-03-07'); ?> </div>
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