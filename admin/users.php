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
  <div class="animated fadeIn">


  <div class="cover main">
    <h1>User Data</h1>
  </div>
    <!--Users client-->
    <div class="div">
        <div class="col-lg-12 ">
          <?php
            $result = mysql_query("SELECT * FROM `circle`");
            $num_rows = mysql_num_rows($result);
          ?>
              <div class='admin-data'>
                Registered User
                <span class='button view' href=''><?php echo "$num_rows";?></a>
              </div><br><br><br><br><br>
          <?php
            $db=mysql_query("SELECT * FROM `circle` ");
            while($data=mysql_fetch_array($db)) {
            echo"<div class='admin-data'>";
            echo $data['name'];
            echo "<a class='button view' href='user_data.php?id=$data[id]'>View</a>";
            echo "</div>";
           }
          ?>
        </div>

        <div class="baro"></div>
      <!--Engineers-->
          <div class="col-lg-12 ">

            <?php $result = mysql_query("SELECT * FROM `dummy`");
              $num_rows = mysql_num_rows($result);
            ?>
                <div class='admin-data'>
                  Registered Engineer
                  <span class='button view' href=''><?php echo "$num_rows";?></a>
                </div><br><br><br><br><br>
            <?php
              $db=mysql_query("SELECT * FROM `dummy` ");
              while($data=mysql_fetch_array($db)) {
              echo"<div class='admin-data'>";
              echo $data['name'];
              echo "<a class='button view' href='user-engineer.php?id=$data[id]'>View</a>";
              echo "</div>";
             }
            ?>
          </div>
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
