<?php
session_start();
/*$name_of_cookie='aabbccdd';
$value_of_cookie='personalise data';
$expiration_date_time=time()+(60*60*24*30);
setcookie($name_of_cookie,$value_of_cookie,$expiration_date_time);*/
?>

<?php
$_SESSION['car']='BMW';
$_SESSION['color']='Black';
$_SESSION['animal']='cat';
/*session_unset();*/
session_destroy();
echo print_r($_SESSION);


/*if(isset($_COOKIE[$name_of_cookie])){
    echo $_COOKIE[$name_of_cookie].' - cookie is present here!!';
} else{
    die('Sorry! cookie is not present here');
}*/

?>


<!--
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
<a href="get.php?id=12222">Click here</a>
</body>
</html>
-->