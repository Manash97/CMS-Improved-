<?php
  //user login and homepage

  require 'core/session.php';
  require 'core/config.php';
    require 'core/redirect.php';

  $message="";

  if(empty($_POST)===false){
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);
    if(empty($username) || empty($password)){
          header('Location:admin-login.php');
    }else{
        $query1=mysql_query("SELECT * FROM `admin` WHERE id AND username='$username' and password='$password'") or die(mysql_error());
        if(mysql_num_rows($query1)>0){
            $_SESSION['username'] = $_REQUEST['username'];
            header('Location:admin/admin-profile.php');
        }else{
          $message="Admin username and password is incorrect";
        }
      }
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME  </title>
    <link rel="shortcut icon" href="files/img/ico.ico">
    <link rel="stylesheet" href="files/css/bootstrap.css">
    <link rel="stylesheet" href="files/css/custom.css">
  </head>
  <body>
  <div class="animated fadeIn">

    <div class="cover admin text-center">

      <img src="" alt=""/>

      <br>
      <h2>Admin Login</h2>
    </div>


      <div class="padd">

        <div class="col-lg-12 text-center">
              <form class="" method="post" autocomplete="off">
                <label for="username"></label>
                <input type="text" name="username" placeholder="Admin username" id="email">
                <br><br>
                <label for="password"></label>
                <input type="password" name="password" placeholder="password" id="pass">
                <br><br>
                <button type="submit" class="log">Login</button>
                <br><br>
                <span class="red"><?php echo $message; ?></span>
              </form>
              <br>
        </div>
      </div>
      <div class="links">
        <a href="dummy-login.php">Engineer </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">User </a>
      </div>
  </div>
      <?php
      include 'footer.php';
      include 'core/jsscript.php';
      ?>

  </body>
</html>
