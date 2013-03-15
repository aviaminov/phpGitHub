<?php
$conn=mysql_connect("localhost","root","") 
  or die("Error");
mysql_select_db("nadlanportal",$conn) or
  die("Error");

// דוגמה
mysql_query("INSERT INTO city(c_id, c_name) 
                VALUES('null', 'הכל')",$conn) or die(mysql_error());

mysql_query("INSERT INTO city(c_id, c_name) 
                VALUES('null', 'רמת גן')",$conn) or die(mysql_error());


mysql_close($conn);
echo "Success.";
?>

