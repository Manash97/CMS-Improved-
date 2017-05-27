<?php

require '../core/session.php';
require '../core/config.php';
require '../core/admin-key.php';

		$id = $_GET['id'];
		mysql_query("DELETE FROM `circle` WHERE id='$id'")or die(mysql_error());
		header("Location:users.php");

?>
