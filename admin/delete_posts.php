<?php
require '../core/config.php';

		$id = $_GET['id'];
		mysql_query("DELETE FROM `posts` WHERE id='$id'")or die(mysql_error());
		header("Location:admin-profile.php");

?>
