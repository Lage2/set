<!DOCTYPE html>
<html>
  <head>
    <?php include "comp/head.php" ?>
  </head>
  <body id="index">

    <section class="container">
        <div class="content row">
            <?php include "comp/header.php"; ?>
            
            <section class="col col-sm-2 col-md-2 col-lg-2">
                <?php include "comp/oportunidades.php"; ?>
            </section>
            
            <section class="main col-sm-7 col-md-7 col-lg-7">
              <h1 class="titulospaginas">Destaques</h1>
        
              <?php include "comp/carousel.php"; ?>
              <br/>
              <iframe class="responsiveVideo" type="text/html" src="http://www.youtube.com/embed/EU46skb-1XE?autoplay=1" frameborder="0"></iframe>
            </section>
          
        <section class="col col-sm-3 col-md-3 col-lg-3">
          <?php include "comp/sidebar.php"; ?>
        </section>
      </div>
      <?php include("comp/footer.php"); ?>
    </section>
    <?php include "comp/scripts.php" ?>
  </body>
  
<script type="text/javascript">
  document.write('<img style="display:none" src="analytics/counter.php?ref=' + escape(document.referrer) + '" border="0">');
</script>
<noscript><a href="analytics/stats.php"><img src="analytics/counter.php" border="0"></a></noscript>
</html>