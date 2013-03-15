<?php

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/Style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/addProperty.css" media="screen" />
        <script type="text/javascript" src="js/jquery1.9.1.min.js"></script>
        <script type="text/javascript" src="js/myScript.js"></script>
        <title></title>


        <script>
            $(document).ready(function () {
                $("#logIn").hide();
                $("#show").show();
                $("#hide").hide();
            });
            $(document).ready(function () {
                $(".testtt").hide();
            });



            // Form validation code will come here.
            function validate() {
                /*
                if( document.myForm.Name.value == "" )
                {
                alert( "Please provide your name!" );
                document.myForm.Name.focus() ;
                return false;
                }
                if( document.myForm.EMail.value == "" )
                {
                alert( "Please provide your Email!" );
                document.myForm.EMail.focus() ;
                return false;
                }
                if( document.myForm.Zip.value == "" ||
                isNaN( document.myForm.Zip.value ) ||
                document.myForm.Zip.value.length != 5 )
                {
                alert( "Please provide a zip in the format #####." );
                document.myForm.Zip.focus() ;
                return false;
                }
                */


                if (document.addPropertyForm.s_activity_type.value == "הכל") {
                    alert("חובה לבחור סוג עסקה");
                    return false;
                }
                if (document.addPropertyForm.s_neches_type.value == "הכל") {
                    alert("חובה לבחור סוג הנכס");
                    return false;
                }
                if (document.addPropertyForm.s_city.value == "3") {
                    alert("חובה לבחור עיר");
                    return false;
                }

                if (document.addPropertyForm.s_neighborhood.value == "הכל") {
                    alert("חובה לבחור שכונה");
                    return false;
                }

                if (document.addPropertyForm.s_floor.value == "הכל") {
                    alert("חובה לבחור קומה");
                    return false;
                }

                if (document.addPropertyForm.s_to_floor.value == "הכל") {
                    alert("חובה לבחור עד קומה");
                    return false;
                }

                if (document.addPropertyForm.s_rooms.value == "הכל") {
                    alert("חובה לבחור חדרים");
                    return false;
                }
                
                return (true);
            }
            //-->


        </script>
    </head>
    <body>
        <div id="templatemo_main">
            <div id="content">
                <div id="logIn">
                    <form class="clearfix" action="" method="post">
                        <label  for="username">אימייל:</label>
					    <input  type="text" name="username" id="username" value="" size="23" />
					    <label  for="password">סיסמה:</label>
					    <input  type="password" name="password" id="password" size="23" />
	            	    <label><input name="rememberMe" id="rememberMe" type="checkbox" checked="checked" value="1" /> &nbsp;זכור אותי</label>
					    <input type="submit" name="submit" value="התחבר" class="bt_login" />
                    </form>
                </div>
                <INPUT id="hide" type="image" title="סגור התחברות" src="/images/Actions-zoom-out-icon.png" value="">
                <INPUT id="show" type="image" title="פתח התחברות" src="/images/Actions-zoom-in-icon.png" value="">
                <a href="index.php"><img src="images/home-icon.png"  alt="home page" title="דף הבית"></a> 
                <br />          
                <div class="frame1" >
                    <div class="h1frame1">פרטי נכס</div>
                       <form name="addPropertyForm" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" onsubmit="return(validate());">
                            <table>
                            <tr> 
                                <td style="width: 120px;">סוג עסקה:</td>
                                <td style="width: 180px;">
                                    
                                <?php require 'function/connect.php';
                                $result = mysqli_query( $con,"SELECT * FROM activity_type ");?>
                                <select name="s_activity_type">
                                    <?php while($row = mysqli_fetch_array($result)) 
                                    {?>
                                        <option value="<?php echo $row['a_t_name'];?>"><?php echo $row['a_t_name'];?></option>
                                     <?php } ?>
                                    </select>                   
                                </td>
                            </tr>
                            <tr>
                                <td >סוג הנכס:</td>
                                <td><?php $result = mysqli_query( $con,"SELECT * FROM neches_type ");?>
                            <select name="s_neches_type">
                            <?php while($row = mysqli_fetch_array($result))
                            { ?> 
                                <option value="<?php echo $row['n_t_name'];?>"><?php echo $row['n_t_name'];?></option>
                                <?php                           
                            }?>
                            </select>
                                </td>
                            </tr>
                                <tr>
                                    <td >עיר:</td>
                                    <td><?php $result = mysqli_query( $con,"SELECT * FROM city "); ?>
                                        
                                    <select name="s_city" onchange="showUser(this.value)">
                                    <?php while($row = mysqli_fetch_array($result))
                                    {  ?>
                                        <option value="<?php echo $row['c_id'];?>"><?php echo $row['c_name'];?></option>
                                    <?php }  ?>
                                        </select>
                                            
                                    </td>
                                </tr>
                                <tr>
                                    <td >שכונה:</td>
                                    <td>
                                        <div id="txtHint"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td >רחוב:</td>
                                    <td><input name="it_street" type="text" value=""></td>
                                </tr>
                                <tr>
                                    <td >מספר:</td>
                                    <td><input name="it_no" type="text" value=""></td>
                                </tr>
                                <tr>
                                    <td >קומה:</td>
                                    <td>
                                        <?php $result = mysqli_query( $con,"SELECT * FROM floor "); ?>
                                        
                                    <select name="s_floor">
                                    <?php while($row = mysqli_fetch_array($result))
                                    {  ?>
                                        <option value="<?php   echo $row['f_name'];?>"><?php   echo $row['f_name'];?></option>
                                    <?php }  ?>
                                        </select>
                                         
                                    </td>
                                </tr>
                                <tr>
                                    <td >מתוך:</td>
                                    <td>
                                    <?php $result = mysqli_query( $con,"SELECT * FROM floor "); ?>
                                        
                                    <select name="s_to_floor" >
                                    <?php while($row = mysqli_fetch_array($result))
                                    {  ?>
                                        <option value="<?php   echo $row['f_name'];?>"><?php   echo $row['f_name'];?></option>
                                    <?php }  ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td >חדרים:</td>
                                    <td>
                                     <?php $result = mysqli_query( $con,"SELECT * FROM rooms "); ?>
                                        
                                    <select name="s_rooms" >
                                    <?php while($row = mysqli_fetch_array($result))
                                    {  ?>
                                        <option value="<?php   echo $row['r_name'];?>"><?php   echo $row['r_name'];?></option>
                                    <?php }  ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td >שטח במ"ר:</td>
                                    <td><input name="it_size" type="text" value=""></td>
                                </tr>
                                <tr>
                                    <td >מחיר בש"ח:</td>
                                <td><input name="it_price" type="text" value=""></td>
                                </tr>
                            </table>

                            <table>
                            <tr>
                                <td style="width: 120px;">תוספות:</td>
                                <td><input type="checkbox" name="cbBalcony" value="balcony">מרפסת</td>
                                <td><input type="checkbox" name="cbparking" value="parking">מחניה</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="checkbox" name="cbElevator" value="elevator">מעלית</td>
                                <td><input type="checkbox" name="cbAccessforDisabled" value="AccessforDisabled">גישה לנכים</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="checkbox" name="cbAPS" value="APS">ממ"ד</td>
                                <td><input type="checkbox" name="cbWarehouse" value="Warehouse">מחסן</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="checkbox" name="cbImmediate" value="Immediate">מיידי</td>
                            <td></td>
                        </tr>  
                    </table>
                                        <input type="submit" name="submit" value="OK" >
                        </form> 
                    <?php
                        
               if($_POST['submit']=='OK')
                {
                             $Name=$_POST["s_activity_type"]; echo $Name.' - ';
                             $Name1=$_POST["s_neches_type"]; echo $Name1.' - ';  
                            $Name2=$_POST["s_city"]; echo $Name2.' - ';  
  

                            $conn=mysql_connect("localhost","root","") 
                                  or die("Error");
                                mysql_select_db("mydb",$conn) or
                                  die("Error");

                                  mysql_query("INSERT INTO newtable(id, fName) 
                                 VALUES('null', '$Name1')",$conn) or die('Unable to establish a DB connection'); 




                       //     mysqli_query("INSERT INTO nechasim(n_id, user_id, n_activity_type, n_neches_type, n_city) 
                       //     VALUES('null', '3','$Nam', '$Name1','$Name2')",$conn) 
                       //     or die('Unable to establish a DB connection');  
                       
                                    
                       //     mysqli_query("INSERT INTO $tbl_name(name, lastname, email)VALUES('$name', '$lastname', '$email')";" 
                       //     ,$conn) or die(mysql_error());"
                }

                    ?>

                     <?php

                      //  $TextData=$_POST["s_activity_type"]; echo $TextData.'<br>';
                      //  $box=$_POST["s_neches_type"]; echo $box.'<br>';
                      ///  $box=$_POST["two"]; echo $box.'<br>';
                     //   $box=$_POST["three"]; echo $box.'<br>';
                      //  $boxy=$_POST["boxy"]; echo $boxy.'<br>';
                        
                     //   }
                    ?>
                </div>
            </div>

        </div>
    </body>
</html>
