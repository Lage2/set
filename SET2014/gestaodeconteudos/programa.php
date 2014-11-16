<!DOCTYPE html>
<html>
  <head>
  
  <?php
    include "comp/head.php";
    include "comp/EditableSchedule.php";
  ?>
    
  </head>
  <body id="programa">
  
    <section class="container">
      <div class="content row">
        <?php include "comp/header.php"; ?>
      </div>
 <section class="col col-lg-12">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-justified">
    <li class="active"><a href="#dia5" data-toggle="tab">Dia 5</a></li>
    <li><a href="#dia6" data-toggle="tab">Dia 6</a></li>
    <li><a href="#dia7" data-toggle="tab">Dia 7</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="dia5"><?php createEditableScheduleOnDay('2014-03-05'); ?></div>
    <div class="tab-pane" id="dia6"><?php createEditableScheduleOnDay('2014-03-06'); ?></div>
    <div class="tab-pane" id="dia7"><?php createEditableScheduleOnDay('2014-03-07'); ?></div>
  </div>

  </section>
    <?php include "comp/scripts.php" ?>

  </body>
</html>