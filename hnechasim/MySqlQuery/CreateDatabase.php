<?php
$conn=mysql_connect("localhost","root","") 
  or die("Error");

mysql_query("CREATE DATABASE newDataBase
                DEFAULT CHARACTER SET utf8
                DEFAULT COLLATE utf8_general_ci;",$conn) or die(mysql_error());

mysql_close($conn);
echo "Success.";
?>