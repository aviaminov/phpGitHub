<?php

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/Style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/property.css" media="screen" />
        <script type="text/javascript" src="js/jquery1.9.1.min.js"></script>
        <script type="text/javascript" src="js/myScript.js"></script>
        <title></title>

        <script>
            $(document).ready(function(){
                $("#logIn").hide();
                $("#show").show();
                $("#hide").hide();
            });


            $(document).ready(function(){
                $(".testtt").hide();

            });

        </script>

            <script type="text/javascript">
                function showonlyone(thechosenone) {
                    $('.newboxes').each(function (index) {
                        if ($(this).attr("id") == thechosenone) {
                            $(this).hide();
                        }
                        else {
                            $(this).show();
                        }
                    });
                }

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
                
                
     
                <div class="propertyHeader"> 
                    <div class="noHeader" >מס' מודע</div>
                    <div class="typeHeader" >סוג נכס</div>
                    <div class="addressHeader" >כתובת</div>
                    <div class="priceHeader" >מחיר</div>
                    <div class="curencyHeader" >ש"ח</div>
                    <div class="roomHeader" >חדרים</div>
                    <div class="floorHeader" >קומה</div>
                    <div class="picHeader" ><img alt="Camera" src="images/Camera-icon.png" /></div>
                    <div class="DateHeader" >תאריך</div>
                    <div class="openHeader" ><img alt="Actions" src="images/open-torrent-folder-icon.png" /></div>
                    <div class="editHeader" ><img alt="Actions" src="images/edit-icon.png" /></div>
                    <div class="deleteHeader" ><img alt="Actions" src="images/delete.png" /></div>
                    
                </div>

                <?php 

                              require 'function/connect.php';

                           if (mysqli_connect_errno())
                              {
                              echo "Failed to connect to MySQL: " . mysqli_connect_error();
                              }
                            
                            $result = mysqli_query( $con,"SELECT * FROM nechasim ");

                            while($row = mysqli_fetch_array($result))
                              {
                             
                                  ?>
                <div class="property"> 
                    <div class="no" ><?php   echo $row['n_id'];?></div>
                    <div class="type" ><?php   echo $row['n_neches_type'];?></div>
                    <div class="address" ><?php   echo $row['n_street'].", ".$row['n_city'];?></div>
                    <div class="price" ><?php   echo $row['n_price'];?></div>
                    <div class="curency" >ש"ח</div>
                    <div class="room" ><?php   echo $row['n_rooms'];?></div>
                    <div class="floor" ><?php   echo $row['n_floor'];?></div>
                    <div class="pic" >
                    <?php   
                        if($row['n_ishavePic']=='1')
                           {
                        ?>
                            <img alt="camera" class="auto-style8" src="images/Camera-icon.png" />
                        <?php                           
                           } 
                           ?>
                    </div>
                    <div class="Date" ><?php   echo $row['n_registration_date'];?></div>
                    <div class="open" ><img alt="Actions" src="images/open-torrent-folder-icon.png" /></div>
                    <div class="edit" ><img alt="Actions" src="images/edit-icon.png" /></div>
                    <div class="delete" ><img alt="Actions" src="images/delete.png" /></div>
                </div>

             
                        <?php                           
                           } 
                           ?>

         
      



            </div>
        </div>
    </body>
</html>
