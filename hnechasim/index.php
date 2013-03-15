<?php

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/Style.css" media="screen" />
        <script type="text/javascript" src="js/jquery1.9.1.min.js"></script>
        <script type="text/javascript" src="js/myScript.js"></script>
        <title></title>

        <script>
            $(document).ready(function(){
                $("#logIn").hide();
                $("#show").show();
                $("#hide").hide();
            });
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
                
     
                <div id="home" class="section">
                    <ul id="templatemo_menu">
                        <li><a href="#" class="searchProperty"><span>חיפוש נכסים</span></a></li>
                        <li><a href="myProperty.php" class="myProperty"><span>הנכסים שלי</span></a></li>
                        <li><a href="addProperty.php" class="addproperty"><span>הוסף נכס</span></a></li>
                        <li><a href="#" class="finishproperty"><span>נכסים שטופלו</span></a></li>
                        <li><a href="#" class="searchhmetavchim"><span>חיפוש יועץ נדל"ן</span></a></li>
                        <li><a href="#" class="listmetavchim"><span>רשימת יועצי נדל"ן</span></a></li>
                        <li><a href="#" class="client"><span>לקוחות</span></a></li>
                        <li><a href="#" class="email"><span>תיבת הודעות</span></a></li>
                        <li><a href="#" class="Settings"><span>הגדרות מערכת</span></a></li>
                        <li><a href="#" class="support"><span>שאלות ותשובות</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
