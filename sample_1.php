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
<form action="" method="post">
    <input type="text" name="username" placeholder="username"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php
$Username=$_POST['username'];
$Password=$_POST['password'];
$Submit=$_POST['submit'];

if($Submit) {
    $serverName = 'localhost';
    $userName = 'root';
    $passWord = '';
    $conn = mysqli_connect($serverName, $userName, $passWord, 'Login_App');
    if ($conn) {
        echo 'it is connected'.'<br>';
    } else {
        die('not connected --->>> ') . mysqli_connect_error();
    }
    $query = "INSERT INTO users(username,password) VALUES('$Username','$Password')";
    $result=mysqli_query($conn,$query);
    if($result){
        echo'yess';
    }
    else{
        die('nooo');
    }
}