<?php
$conn=mysql_connect("localhost","root","")  or die("Error");
mysql_select_db("nadlanportal",$conn) or die("Error");

mysql_query("UPDATE rooms SET r_name='אחר' WHERE r_id=16;") or die("Error");

mysql_close($con);
echo "Success.";
?>

