<?php
$conn=mysql_connect("localhost","root","") 
  or die("Error");
mysql_select_db("mydb",$conn) or
  die("Error");

mysql_query("CREATE TABLE NewTable (
                id int NOT NULL AUTO_INCREMENT,
                fName varchar(100) NOT NULL,
                PRIMARY KEY (id)
                )
                DEFAULT CHARACTER SET utf8
                DEFAULT COLLATE utf8_general_ci;",$conn) or die(mysql_error());

mysql_close($conn);
echo "Success.";
?>
