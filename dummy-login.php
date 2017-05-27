<?php
  //user login and homepage

  require 'dummy/session.php';
  require 'core/config.php';
    require 'core/redirect.php';

  $message="";

  if(empty($_POST)===false){
  $name =  mysql_real_escape_string($_POST['name']);
  $password =  mysql_real_escape_string($_POST['password']);
    if(empty($name) || empty($password)){

    }else{
        $query1=mysql_query("SELECT * FROM `dummy` WHERE id AND name='$name' and password='$password'") or die(mysql_error());
        if(mysql_num_rows($query1)>0){
            $_SESSION['name'] = $_REQUEST['name'];
            header('Location:dummy/profile.php');
        }else{
          $message="Name and password is incorrect";
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
    <div class="cover dummy text-center"></div>
      <div class="padd">
        <div class="col-lg-12 text-center">
              <form class="" method="post" autocomplete="off">
                <label for="name"></label>
                <input type="text" name="name" placeholder="Name"/>
                <br><br>
                <label for="password"></label>
                <input type="password" name="password" placeholder="Password"/>
                <br><br>
                <button type="submit" class="log">Login</button>
                <br><br>
                <span class="red"><?php echo $message; ?></span>
              </form>
              <br>
              Don't have an acccount ? <a href="dummy-register.php">Sign Up</a>
        </div>
      </div>
      <div class="links">
        <a href="index.php">User </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin-login.php">Admin </a>
      </div>
  </div>
    <?php
    include 'footer.php';
    include 'core/jsscript.php';
    ?>

  </body>
</html>
