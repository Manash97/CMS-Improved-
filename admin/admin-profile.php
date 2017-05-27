<?php
  require '../core/session.php';
  require '../core/config.php';
  require '../core/admin-key.php';
  $session_name = $_SESSION['username'];
  if(empty($_POST)===false){
    $subject = mysql_real_escape_string($_POST['subject']);
    $story =  mysql_real_escape_string($_POST['story']);

    if(empty($subject) || empty($story)){

    }else{
      mysql_query("INSERT INTO `posts` VALUES ('0','$subject','$story','$session_name')") or die(mysql_error());
      $message = "
      <div class='alert succ' id='msg'>
        <div class ='text-right' id='close'>
          <svg class='pointer' fill='#ccc' height='24' viewBox='0 0 24 24' width='24'     xmlns='http://www.w3.org/2000/svg'>
            <path d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z'/>
            <path d='M0 0h24v24H0z' fill='none'/>
          </svg>
          <p class='text-center'>Your post has been Posted</p>
        </div>
      </div>";
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
    <link rel="shortcut icon" href="../files/img/ico.ico">
    <link rel="stylesheet" href="../files/css/bootstrap.css">
    <link rel="stylesheet" href="../files/css/custom.css">
    <script src="../files/js/script.js"></script>

  </head>
  <body >

  <?php require 'nav.php'; ?>

  <div class="animated fadeIn">


    <div class="cover main">
      <?php
      if (isset($_SESSION['username'])===true) {echo "<h1> Welcome, ".$_SESSION['username']."</h1>";}
       ?>
       <a class="button logout" href="../logout.php" onClick="javascript:return confirm ('Are you really want to delete ?');"> Logout </a>
       &nbsp;&nbsp;&nbsp;
       <a href="info.php" class="button bor">Info</a>

       <p class="text-right">
          <?php echo date("l, d M"); ?>
       </p>

    </div>

    <div class="div">
      <div class="col-lg-12">
          <div class="analysis">
            <?php
              $engi = mysql_query("SELECT * FROM `dummy`");
              $count_engi = mysql_num_rows($engi);

              $users = mysql_query("SELECT * FROM `circle`");
              $count_users = mysql_num_rows($users);

              $cmp = mysql_query("SELECT * FROM `cmp_log`");
              $count_cmp = mysql_num_rows($cmp);

              $frd = mysql_query("SELECT * FROM `view_cmp`");
              $count_frd = mysql_num_rows($frd);
            ?>

            <div class="track theme">
                Users <br> <p><?php echo $count_users;?></p>
            </div>

            <div class="track vio">
                Engineers <br> <p><?php echo $count_engi;?></p>
            </div>

            <div class="track red">
                Complains <br> <p><?php echo $count_cmp;?></p>
            </div>

            <div class="track blue">
                Complains forwarded <br> <p><?php echo $count_frd;?></p>
            </div>

          </div>


          <div class="textbox">
          <br><br>
            <?php

            $query1=mysql_query("SELECT * FROM `circle` ORDER BY id DESC LIMIT 1 ");
            $name=mysql_fetch_array($query1);
            $new_user=$name['name'];


            $query=mysql_query("SELECT * FROM `cmp_log` ORDER BY id DESC LIMIT 1 ");
            $name2=mysql_fetch_array($query);
            $new_msg=$name2['name'];

            $query4=mysql_query("SELECT * FROM `dummy` ORDER BY id DESC LIMIT 1 ");
            $name3=mysql_fetch_array($query4);
            $new_eng=$name3['name'];



             ?>

             <div class="content">
               <div class="div_data">New User</div>
               <div class="div_data">New Message From</div>
               <div class="div_data">New Engineer </div>
             </div>
              <div class="div_data vio">
                    <span><?php echo $new_user; ?></span>
              </div>

              <div class="div_data blue">
                    <span><?php echo $new_msg; ?></span>
              </div>

              <div class="div_data theme">
                  <span> <?php echo $new_eng; ?></span>
              </div>

          </div>
      </div>

      <!--Add post-->
      <div class="col-lg-12">
        <div class="post_content">
          <div class="text-center">
            <h2>Anything on your mind</h2><br><br>
            <form class="" action="" method="post">
                <input type="text" class="post" name="subject" placeholder="Subject"/><br><br>
                <textarea name="story" class="post" rows="3" cols="30" placeholder="Story"></textarea><br><br>

                <button type="submit" class="log">Post</button>
            </form>

            <?php echo $message; ?>
          </div>
        </div>





          <div class="content"><br><br><br><br>
            <?php
              $db=mysql_query("SELECT * FROM `posts` ");
              while($data=mysql_fetch_array($db)) {
                $id=$data['id'];
              echo "<div class='glow'> ";
              echo "<h4 class='heading'> Heading : ".$data['subject']."</h4>";
              echo "<p> Story : ".$data['story']."<br>";
              echo "<div class='text-right'>  <a class ='button logout' href ='delete_posts.php?id=$id' onClick=\"javascript:return confirm ('Are you really want to delete ?');\">Delete</a>";
              echo "</p></div></div> ";
             }
            ?>



          </div>
      </div>

    </div>


  </div>


    <footer>
          <br><br>&copy; 2017 <?php echo $web_name; ?>
    </footer>

    <script src="../files/js/jquery.js"></script>
    <script src="../files/js/bootstrap.min.js"></script>
    <script src="../files/js/script.js"></script>
    <script>
    $(document).ready(function(){
        $("#close").click(function(){
            $("#msg").remove();
        });
    });
  </script>


  </body>
</html>
