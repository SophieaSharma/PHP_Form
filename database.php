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
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <label for="username">Username</label>
    <input type="text" name="Username" id="username" required> <br>
    <label for="password">Password</label>
    <input type="password" id="password" name="Password" required><br>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php
$userName=$_POST['Username'];
$passWord=$_POST['Password'];
$Submit=$_POST['submit'];
if($Submit){
    $connection=mysqli_connect('localhost','root','','mydb');
    if($connection){
        echo "yesss"."<br>";
    }else{
        die('nooo ').mysqli_connect_error()."<br>";
    }
  /*  $sql = "INSERT INTO users(Username,Password) VALUES($userName,$passWord)";
    $result=mysqli_query($connection, $sql);
    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }*/
 $query="INSERT INTO users(Username,Password) VALUES('$userName,$passWord')";
    $result=mysqli_query($connection,$query);
    if($result){
        echo "query set";
    }
    else{
        die('query not set');
    }
}

/*$conn=mysqli_connect('localhost','root','','Login_App');
if(!$conn){
    die('connection interrupted').mysqli_connect_error();
}

$createDATABSE="CREATE DATABASE Alesha_DataBase";
$Query=mysqli_query($conn,$createDATABSE);
if ($Query){
   echo'database created';
}
else{
    die('database not created');
}*/
