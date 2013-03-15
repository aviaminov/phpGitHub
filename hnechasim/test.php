

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
<body> 

<form name="form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    Enter some text or numbers:
    <input name="TextData" type="text" value=""><br>

    Select one or more checkboxes:
    <input name="one" type="checkbox" value="Box one, ">One
    <input name="two" type="checkbox" value="Box two, ">two
    <input name="three" type="checkbox" value="Box three, ">three<br>


    Replace the text in this box with your own text:
    <textarea name="boxy" rows=5 cols=20 >Example Data
    </textarea><br>

    Now select <b>one</b> of the drop down choices:
    <select size="1" name="Name">
    <option value=""> </option>
    <option value="value1">Item1</option>
    <option value="value2">Item2</option>
    <option value="value3">Item3</option>
    <option value="value4">Item4</option>
    </select> <br>


    <input type="submit" name="submit1" value="OK" >

</form>



 <?php
$TextData=$_POST["TextData"]; echo $TextData.'<br>';
$box=$_POST["one"]; echo $box.'<br>';
$box=$_POST["two"]; echo $box.'<br>';
$box=$_POST["three"]; echo $box.'<br>';
$boxy=$_POST["boxy"]; echo $boxy.'<br>';
$Name=$_POST["Name"]; echo $Name.'<br>';


?>



    </body>
</html>
