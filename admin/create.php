<?php
  require '../core/session.php';
  require '../core/config.php';
  require '../core/admin-key.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME  </title>
    <link rel="shortcut icon" href="../files/img/ico.ico">
    <link rel="stylesheet" href="../files/css/bootstrap.css">
    <link rel="stylesheet" href="../files/css/custom.css">
  </head>
  <body>

  <?php require 'nav.php'; ?>

  <div class="cover main">
    <h1>Add Engineer</h1>
  </div>
    <!--Users client-->
    <div class="div">
        <div class="col-lg-12">
          <div class="quotes">
            <h2>Add Engineer</h2>
            
            <p>Note: You can Register an Engineer account.</p>
          </div>
          <a class="button logout" href="../dummy-register.php"> Register</a>
        </div>
    </div>

      <footer>
            <br><br>&copy 2017 <?php echo $web_name; ?>
      </footer>

    <script src="../files/js/jquery.js"></script>
    <script src="../files/js/bootstrap.min.js"></script>
    <script src="../files/js/script.js"></script>

  </body>
</html>
