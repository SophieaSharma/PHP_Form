<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$firstname = $_POST["FirstName"];
$lastname = $_POST["LastName"];
$email = $_POST["EmailId"];
$college = $_POST["college"];
$number = $_POST["PhnNum"];
$submit = $_POST["submit"];
/*
$fnames=array("sophiea", "alesha", "dalra", "samantha", "chase", "bradson");
if (isset($submit)) {
    if(in_array($firstname,$fnames)){
        echo "hey, ". $firstname. " you are our client";
    }
    else{
        echo "sorry, you are not welcome";
    }

}
*/

?>
<form action="form1.0.php" method="post">
    <input type="text" name="FirstName" placeholder="Enter Your FirstName"><br>
    <input type="text" name="LastName" placeholder="Enter Your LastName"><br>
    <input type="string" name="EmailId" placeholder="Enter Your Email Id"><br>
    <?php
    if(strlen($email)<5)echo "not a valid email id"."<br>";
    ?>
    <input type="text" name="college" placeholder="Name of the Institute/college"><br>
    <input type="number" name="PhnNum" placeholder="Enter your Number"><br>
    <input type="submit" name="submit"><br>
</form>

</body>
</html>