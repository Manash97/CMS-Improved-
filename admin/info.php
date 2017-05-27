<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../files/img/ico.ico">
    <title>Web Information</title>
    <style media="screen">
      *{padding: 0px;margin: 0px;font-family:"Gotham A", Gotham, "Gotham SSm A", "Gotham SSm B", "Gotham SSm", "Proxima Nova", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-weight: lighter;}
      .bar{
        width:100%;
        height: 80px;
        background:#4db6ac;
        position: fixed;
        z-index: 999999;
        padding-top: 30px;
      }
      .view{
        width:900px;
        height: 100%;
        position: relative;
        margin: auto;
        background: #eee;

      }
      .download{
        padding: 20px 30px;
        background: #fff;
        position: relative;
        float: right;
        right: 30px;
        text-decoration: none;
        color: #4db6ac;
        margin-left: 10px;

      }
    </style>
  </head>
  <body>
    <div class="bar">
        <a class="download" href="../files/img/docu.pdf" download="documentaion">Download</a>

        <a class="download" href="admin-profile.php">Profile</a>
    </div>

    <div class="view">
        <img src="../files/img/docu.png" alt="documentaion" style="width:100%;height:100%;">
    </div>

  </body>
</html>
