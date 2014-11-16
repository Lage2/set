
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php 
      $db_connection = new SETDB();

      $numberOfCarouselNews = $db_connection->countNews(true);

      for($i = 0; $i < $numberOfCarouselNews; ++$i) {
        if($i == 0) {
          echo '<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
        } else {
          echo '<li data-target="#carousel-example-generic" data-slide-to="' . $i . '"></li>';
        }
      }
    ?>
  </ol>

  <div class="carousel-inner">
    <?php
      $first = true;
      $db_connection->forEachNewsCall(true, function($title, $description, $imagePath) use (&$first) {
        echo '<div class="item';

        if($first) {
          echo ' active';
          $first = false;
        }

        echo '"><img src="' . $imagePath . '" alt="descricao"><div class="carousel-caption"><h3>' . $title . '</h3><p>' . $description . '</p></div></div>';
      });
    ?>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>