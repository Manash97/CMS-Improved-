<?php
  require 'core/config.php';
  require 'core/session.php';
  error_reporting(0);
  if(empty($_POST)===false){
    $name = mysql_real_escape_string($_POST['name']);
    $username =  mysql_real_escape_string($_POST['username']);
    $email =  mysql_real_escape_string($_POST['email']);
    $post = mysql_real_escape_string($_POST['post']);
    $password =  mysql_real_escape_string($_POST['password']);
    if(empty($name)||empty($username)||empty($email)||empty($post)||empty($password)){
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL) === true) {
      $message = "Not a Valid Email address!";
    }else{
      $string = mysql_query("INSERT INTO `dummy` VALUES ('0','$name','$username','$email','$post','$password',NOW())") or die(mysql_error());
      $message = "Account has been Registerd";
      }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME </title>
    <link rel="shortcut icon" href="files/img/ico.ico">
    <link rel="stylesheet" href="files/css/bootstrap.css">
    <link rel="stylesheet" href="files/css/custom.css">
  </head>
  <body>
  <div class="animated fadeIn">
    <div class="cover dummy text-center"></div>
      <div class="padd">
        <div class="col-lg-12 text-center">
          <h2>Engineer Register Form </h2>
          <br><br>
              <form class="" method="post" autocomplete="off">
                <input type="text" name="name" placeholder="Name"/>
                <br><br>
                <input type="text" name="username" placeholder="Username"/>
                <br><br>
                <input type="text" name="email" placeholder="Email"/>
                <br><br>
                <input type="text" name="post" placeholder="Designation"/>
                <br><br>
                <input type="password" name="password" placeholder="password"/>
                <?php echo "<p>".$message."</p>"; ?>
                <br><br>
                <button type="submit" class="log">Sign up</button>
              </form>
              <?php
                if (isset($_SESSION['username'])===true) {
                  echo "<br><br><br><h3>Back to <a href = 'admin/admin-profile.php'>Profile</a></h3>";
                }
              ?>
        </div>
      </div>
      <div class="links">
        <a href="index.php">Home </a>
      </div>
    </div>
    <script src="files/js/jquery.js"></script>
    <script src="files/js/bootstrap.min.js"></script>
    <script src="files/js/script.js"></script>
  </body>
</html>
