<?php
$conn=mysql_connect("localhost","root","") 
  or die("Error");
mysql_select_db("nadlanportal",$conn) or
  die("Error");

// שכונות ברנמת גן

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','הכל', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','כפר אזר', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','מרכז העיר', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','מרום נווה', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','נווה יהושע', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','קסם', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','נחלת גנים', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','קריית בורכוב', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','קריית קריניצי', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','רמת אפעל', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','רמת חן', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','רמת יצחק', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','רמת עמידר', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','רמת שקמה', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','שיכון ותיקים', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','שכונת הגפן', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','שכונת הלל', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','שכונת עלית', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','שכונת ראשונים', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','תל בנימין', 'null')",$conn) or die(mysql_error());

mysql_query("INSERT INTO neighborhood(nh_id, city_id, nh_name, nh_mome ) 
                VALUES('null', '4','תל גנים', 'null')",$conn) or die(mysql_error());


mysql_close($conn);
echo "Success.";
?>
