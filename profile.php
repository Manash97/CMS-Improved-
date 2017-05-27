<?php

  require 'core/session.php';
  require 'core/config.php';
  include 'core/user_key.php';

//  require 'core/redirect.php';

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" href="files/img/ico.ico">
    <link rel="stylesheet" href="files/css/bootstrap.css">
    <link rel="stylesheet" href="files/css/custom.css">
  </head>
  <body>

      <div class="cover">
        <nav class="nav_u">
          <ul>
            <li><a href="#">Profile</a></li>
            <li><a href="message.php">Message</a></li>
          </ul>
        </nav>

        <p class="text-right pdd">
           <?php echo date("d M , l "); ?>
        </p>
      </div>

  <div class="animated fadeIn">

      <?php require 'nav-profile.php'; ?>

          <div class="content">
            <div class="container">

                  <div class="col-lg-12">

                      <h2>How to complain</h2>
                      <br><br><br>

                      <div class="col-lg-4">
                        <div class="quotes blg text-center">
                          <h3>First</h3>
                            <p>You can complain directly with us you have been dealing with.  Complaints are often sorted out immediately this way.</p>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="quotes blg text-center">
                          <h3>Second</h3>
                            <p>If you don’t know who to contact, or you have a name but no telephone number, then call our enquiries team on 1800 852 852.</p>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="quotes blg text-center">
                          <h3>Third</h3>
                            <p>The Best way to complain you can use our online complaints form.</p>
                        </div>
                      </div>

                    <div class="col-lg-12">
                        <p>Your complaint will be recorded and dealt with by the most appropriate team or person in your area.</p>
                    </div>

              <div class="content">
                <div class="col-lg-12">
                  <div class="posts">
                    <?php
                      $db=mysql_query("SELECT * FROM `posts` ");
                      while($data=mysql_fetch_array($db)) {
                      echo "<br> <br> <div class='quotes glow'> ";
                      echo "<h4 class='heading'> Heading : ".$data['subject']."</h4>";
                      echo "<p> Story : ".$data['story']."<br><br>";
                      echo " Posted By : ".$data['session_name']."<br>";
                      echo "</p></div><br><br>";
                     }
                    ?>
                  </div>
                </div>
              </div>


            </div>


            <div class="col-lg-12">
                  <div class="jumbotron india_cover"></div>
            </div>

          </div>
        </div>
      </div>
                <footer>
                    <br><br>&copy 2017 <?php echo $web_name; ?>
                </footer>





  <?php include 'core/jsscript.php'; ?>
  </body>
</html>
