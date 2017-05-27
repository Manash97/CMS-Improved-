<?php
  require '../core/session.php';
  require '../core/config.php';
  require '../core/admin-key.php';
  $id = $_GET['id'];

  $id_d = $_GET['dummy'];

	$result = mysql_query("SELECT * FROM `cmp_log` WHERE id='$id'");
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
     <h1>Forward message</h1>
   </div>

   <div class="div">

     <div class="col-lg-12">
     <?php
     $no=1;
       $db=mysql_query("SELECT * FROM `dummy` WHERE id = $id_d");
       while($data=mysql_fetch_array($db)) {
           $name = $data['name'];
             }
     ?>
     <h2>You  sending this message to <?php echo $name ; ?></h2>
      <br><br>



     <br><br>
 <table>
 <?php
   $query1=mysql_query("SELECT * FROM `cmp_log` WHERE id='$id'");
   while( $arry=mysql_fetch_array($query1) ) {

     $id = $arry['id'];
     $user_id = $arry['user_id'];
     $name = $arry['name'];
     $username = $arry['username'];
     $email = $arry['email'];
     $phone_no = $arry['phone no'];
     $subject = $arry['subject'];
     $complain = $arry['complain'];
     $ref = $arry['ref_no'];

   }

      echo "<tr> <td> <b> Message Id </b> </td>";
      echo "     <td> ".$id."</td> </tr>";

      echo "<tr> <td> <b> Profile Id </b> </td>";
      echo "     <td> ".$user_id."</td> </tr>";

      echo "<tr> <td> <b> Name </b> </td>";
      echo "     <td> ".$name."</td> </tr>";

      echo "<tr> <td> <b> Username </b> </td>";
      echo "     <td> ".$username."</td> </tr>";

      echo "<tr> <td> <b> Phone no </b> </td>";
      echo "     <td> ".$phone_no."</td> </tr>";

      echo "<tr> <td> <b> Subject </b> </td>";
      echo "     <td> ".$subject."</td> </tr>";

      echo "<tr> <td> <b> Complain </b> </td>";
      echo "     <td> ".$complain."</td></tr>";

      echo "<tr> <td> <b> Refference </b> </td>";
      echo "     <td> ".$ref."</td></tr>";

 ?>
 </table>
 <?php

 $user_id_e = mysql_real_escape_string($user_id);
 $name_e = mysql_real_escape_string($name);
 $username_e = mysql_real_escape_string($username);
 $email_e = mysql_real_escape_string($email);
 $phone_no_e = mysql_real_escape_string( $phone_no);
 $subject_e = mysql_real_escape_string($subject);
 $complain_e = mysql_real_escape_string($complain);
 $ref_e = mysql_real_escape_string($ref);


 if(empty($_POST)===false){
   $status = mysql_real_escape_string($_POST['status']);

   if(($status)==46){
     $query = mysql_query("SELECT ref_no FROM `view_cmp` WHERE ref_no=$ref");
       if (mysql_num_rows($query) != 0){
           #$message =  "This message is already send to the selected Engineer";
         $message =   "<div class='alert errr' id='msg'>
         <div class ='text-right' id='close'>
             <svg class='pointer' fill='#FFF' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'>
                 <path d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z'/>
                 <path d='M0 0h24v24H0z' fill='none'/>
             </svg>
         </div>

          <p>This message is already send to the selected Engineer</p>
         </div>";

       }else{
         mysql_query("INSERT INTO `view_cmp` VALUES ('0','$ref_e','$name_e','$email_e','$phone_no_e','$subject_e','$complain_e','$id_d')") or die(mysql_error());

         $message =   "<div class='alert succ' id='msg'>
         <div class ='text-right' id='close'>
         <svg class='pointer' fill='#FFF' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'>
             <path d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z'/>
             <path d='M0 0h24v24H0z' fill='none'/>
         </svg>
           <p class='text-center'>Message successfully sent to the selected Engineer</p>
         </div> </div>";
       }
   }else{
          $message = "<div class='alert errr' id='msg'>
          <div class ='text-right' id='close'>
          <svg class='pointer' fill='#FFF' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'>
              <path d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z'/>
              <path d='M0 0h24v24H0z' fill='none'/>
          </svg>
            <p class='text-center'>Message Wasn't send !!</p>
          </div> </div>";
     }
 }
 ?>

 <form class="" action="" method="post">
   <p><?php echo $message; ?> </p>
   <input type="text" name="status" placeholder="23 + 23 = ?">
   <input type="submit" class="frd" value="send">
 </form>
 <br><br><br>

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
