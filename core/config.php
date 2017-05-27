<?php

class MySqlDriver {
  private $link;
	private $host = "localhost";
	private $database = "app";
	private $username =  "root";
	private $password = 'password';

   function __construct($database=""){
	   if (!empty($database)){ $this->database = $database; }
	   $this->link = mysql_connect($this->host,$this->username,$this->password);
	   if ($this->link) { mysql_select_db($this->database,$this->link); }
	   return $this->link;  // returns false if connection could not be made.
   }
   // this will be called automatically at the end of scope
   public function __destruct() {
      mysql_close( $this->link );
   }
}
$gLink=new MySqlDriver();


$web_name = "Complaint Management";
?>
