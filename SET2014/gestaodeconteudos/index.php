<!DOCTYPE html>
<html>
  <head>
    <?php
    include("comp/specialhead.php");
  session_start();
if(isset($_SESSION['utilizador'])){
  header("refresh:1;url=management.php");
  die();
}

?>
  </head>
  <body id="index">
    <div class="container">
     <div class="content row">
		 <img id="logoset" class="img-responsive" src="img/logo.png">
     </div>
     <div class="content row">
      <form class="form-signin" method="post" action="management.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="user" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="passwd" type="password" class="form-control" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
     </div>
    </div>
    
   <?php include "comp/scripts.php" ?>
  </body>
</html>
