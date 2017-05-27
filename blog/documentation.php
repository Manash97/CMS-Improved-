<?php
 $web_name = "Complain Management System";
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

    <nav class="custom_nav" id="top">
        <ul>
          <li><a href="../index.php">Login</a></li>
          <li><a href="../signup.php">Signup</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="#">Documentaion</a></li>
        </ul>
    </nav>

  <div class="animated fadeIn">
    <header class="custom_header">

        <h1>Complaint Management System</h1>
        <p>We aim to provide an excellent and consistent service to all our customers through our customer promise.</p>
    </header>

    <div class="col-lg-12"><!--col-lg-12-->

      <div class="container"><!--col-lg-12-->


          <div class="col-lg-2"><!--nav-->

            <nav class="min_nav">
              <ul>
                <li><a href="#complain">How to complain</a></li>
                <li><a href="#next">What happens next</a></li>
                <li><a href="#satisfied">If you’re not satisfied</a></li>

              </ul>
            </nav>

          </div><!--nav-->

          <div class="col-lg-10">
          <h1>Complaints procedure</h1>
          <div class="process"></div>
            <p>(I) Register your Account, (II) Login with email and password, (III) Your profile will be verified, (IV) send your complaint</p>

            <p>We aim to provide an excellent and consistent service to all our customers through our customer promise. If you aren’t satisfied with any aspect of our service, let us know so we can resolve the matter as quickly as possible.<br><br>The complaints procedure is set out in 3 stages below.</p>

            <h1 id="complain">How to complain</h1>
            <p>You can complain directly to the person you have been dealing with, or their line manager. Complaints are often sorted out immediately this way.<br>
              If you don’t know who to contact, or you have a name but no telephone number, then call our enquiries team on 0300 060 3900.<br>
              You can also use our online complaints form.<br>
              Your complaint will be recorded and dealt with by the most appropriate team or person in Natural England.<br>
              If you’re unhappy with the response you receive at this stage, you can escalate your complaint to the relevant area or team manager.</p>

            <h1 id="next">What happens next</h1>

            <p>We will investigate your complaint. If we’re at fault, we will try to put things right. If not, we will give you a full explanation. If you escalate to an area or team manager, we will:
              <br><br>

              (i) Acknowledge we’ve received your complaint within 2 working days and say who is dealing with it <br><br>
              (ii) Call you to discuss your complaint within 5 working days of the acknowledgement <br><br>

              We’ll work to deal with your complaint as quickly as possible. If it’s going to take longer, we’ll let you know.</p>

              <h1 id="satisfied">If you’re not satisfied</h1>
              <p>If you are not satisfied, Natural England will appoint a director who will examine your complaint on behalf of our chief executive and contact you to discuss the issue. The response at this stage will be our final response.
              </p>

              <h1>Exceptions to this process</h1>
              <p>Appeals against payment and payment recovery decisions are covered by a different process. Please contact the individual named in the original correspondence you received.
                <br><br>
              If your complaint relates to an access to information request, please contact the individual named in the original response you received or email foi@naturalengland.org.uk.</p>
              <br><br><br>
              <a href="#top">Top</a>
              <br><br><br><br>
          </div> <!--content-->

      </div>
    </div> <!--col-lg-12-->

  </div>
    <footer>
        <br><br>&copy; 2017 <?php echo $web_name; ?>
    </footer>

    <script src="../files/js/jquery.js"></script>
    <script src="../files/js/bootstrap.min.js"></script>
    <script src="../files/js/script.js"></script>
    <script>
    $(document).ready(function(){
      $("a").on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){
            window.location.hash = hash;
          });
        }
      });
    });
    </script>
  </body>
</html>
