<?php

  require '../core/session.php';
  require '../core/config.php';
  require '../core/admin-key.php';

  date_default_timezone_set('Asia/Kolkata');
  $update = date('M, l, h:i a');
      if(isset($_POST['update']))
      {
        $name = mysql_real_escape_string($_POST['name']);
        $username = mysql_real_escape_string($_POST['username']);
        $password=mysql_real_escape_string($_POST['password']);
        if(empty($name) || empty($username) || empty($password)){
          $message="
          <div class='alert errr' id='msg'>
          <div class ='text-right' id='close'>
              <svg class='pointer' fill='#FFF' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'>
                  <path d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z'/>
                  <path d='M0 0h24v24H0z' fill='none'/>
              </svg>
          </div>
           <p>Choose Name, Username And Password !!</p>
          </div>";
        }else{
            mysql_query("UPDATE admin SET name='$name',username='$username',password='$password',up_time='$update' WHERE id='1'")or die(mysql_error());
            $message = "
            <div class='alert succ' id='msg'>
              <div class ='text-right' id='close'>
                <svg class='pointer' fill='#ccc' height='24' viewBox='0 0 24 24' width='24'     xmlns='http://www.w3.org/2000/svg'>
                  <path d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z'/>
                  <path d='M0 0h24v24H0z' fill='none'/>
                </svg>
                <p class='text-center'>Your credentials has been Changed</p>
              </div>
            </div>
            ";
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
    <link rel="shortcut icon" href="../files/img/ico.ico">
    <link rel="stylesheet" href="../files/css/bootstrap.css">
    <link rel="stylesheet" href="../files/css/custom.css">
    <script src="../files/js/script.js"></script>
    <style media="screen">
      table,td{
        border: 0px;
      }
    </style>
  </head>
  <body>
  <?php require 'nav.php'; ?>
    <div class="cover main">
      <h1>General Settings</h1>
    </div>
    <div class="div">
          <div class = "col-lg-12">
            <form class="" action="" method="post" autocomplete="off">
                  <?php
                  $query1=mysql_query("SELECT * FROM admin WHERE id='1'");
            			while( $arry1=mysql_fetch_array($query1)) {
                  ?>
              <table>
                  <tr>
                      <td><h4>Update your data</h4><br><br></td>
                  </tr>
                  <tr>
                    <td>Last Updated on :</td>
                    <td> <?php echo $arry1['up_time'];?></td>
                  </tr>
                  <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" placeholder="<?php echo $arry1['name'];?>"></td>
                  </tr>
                  <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="<?php echo $arry1['username'];?>"></td>
                  </tr>
                  <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" placeholder="<?php echo $arry1['password'];?>"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><button name="update" type="submit" class="log">Save</button></td>
                  </tr>
              </form>
              <?php
                    }
                    echo $message;
              ?>
          </table>
          </div>
    </div>
    <footer>
          <br><br>&copy 2017 <?php echo $web_name; ?>
    </footer>
    <script src="../files/js/jquery.js"></script>
    <script src="../files/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#close").click(function(){
            $("#msg").remove();
        });
    });
    </script>
  </body>
</html>
