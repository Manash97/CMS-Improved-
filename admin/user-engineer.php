<?php
  require '../core/session.php';
  require '../core/config.php';
  require '../core/admin-key.php';

  $id = $_GET['id'];
	$result = mysql_query("SELECT * FROM `dummy` WHERE id='$id'") or die(mysql_error());
	$arry = mysql_fetch_array($result);
	if (!$result) {
			die("Error: Data not found..");
		}
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
  <?php require 'nav.php';?>
  <div class="animated fadeIn">


  <div class="cover main">
    <h1>Engineer Data</h1>
  </div>
    <div class="div">
        <div class="col-lg-12 ">
          <table>
          <?php
            $query1=mysql_query("SELECT * FROM `dummy` WHERE id='$id'");
            while( $arry=mysql_fetch_array($query1) ) {
               echo "<tr> <td> <b> Profile Id </b> </td>";
               echo "     <td> ".$arry['id']."</td> </tr>";
               echo "<tr> <td> <b> Name </b> </td>";
               echo "     <td> ".$arry['name']."</td> </tr>";

               echo "<tr> <td> <b> Username </b> </td>";
               echo "     <td> ".$arry['user_name']."</td> </tr>";

               echo "<tr> <td> <b> Field </b> </td>";
               echo "     <td> ".$arry['post']."</td> </tr>";

               echo "<tr> <td> <b> Email </b> </td>";
               echo "     <td> ".$arry['email']."</td> </tr>";
               echo "<tr> <td> <b> Password </b> </td>";
               echo "     <td> ".md5($arry['password'])."</td> </tr>";
               echo "<tr> <td> <b> Joined in </b> </td>";
               echo "     <td> ".$arry['time']."</td></tr>";
             }
          ?>
          </table>
          <br><br><br><br>
          <?php
          echo "<a class='button logout' href ='delete_e.php?id=$id' onClick=\"javascript:return confirm ('Are you really want to delete ?');\">Delete</a>";
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
