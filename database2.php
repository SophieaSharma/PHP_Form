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
    <input type="text" name="username" id="username" required> <br>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required><br>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
//lets make a connection and database first
$USERNAME=$_POST['username'];
$PASSWORD=$_POST['password'];
$SUBMIT=$_POST['submit'];
if($SUBMIT) {
    $connection = mysqli_connect('localhost', 'root', '');
    if (!$connection) {
        die('connection interrupted');
    }
    $createDATABASE = "CREATE DATABASE new_database";
    $result_1 = mysqli_query($connection, $createDATABASE );
    if ($result_1) {
       echo'database created';
    }else{
        die('database not created');
    }
  /*  $connection = mysqli_connect('localhost', 'root', '','new_database');
    $insert_data_query="INSERT INTO (username,password) VALUES ('$USERNAME','$PASSWORD')";
    $result_2=mysqli_query($connection,$insert_data_query);
    if(!$result_2){
        die('coudnt insert data');
    }*/
}
?>
