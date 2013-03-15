
<?php
$q=$_GET["q"];
$con = mysql_connect('localhost', 'root', '');
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
 mysql_select_db("nadlanportal", $con);
$sql="SELECT * FROM neighborhood WHERE city_id = '".$q."'";
 $result = mysql_query($sql);?>
<select name="s_neighborhood">
<?php while($row = mysql_fetch_array($result)) 
{?>
<option value="<?php echo $row['nh_name'];?> "> <?php echo $row['nh_name'];?> </option>
 <?php } ?>
</select>
<?php mysql_close($con);?>
                                        


                                    
