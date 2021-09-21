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
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $FirstName=$_POST["first-name"];
        $LastName=$_POST["last-name"];
        $Email=$_POST["email"];
        $FirstnameErr=$lastnameErr=$emailErr="";
        if(empty($FirstName)){
            $FirstnameErr="First Name is Required";
        }
        if(empty($LastName)){
            $lastnameErr="Last Name is Required";
        }
        if(empty($Email)){
            $emailErr="Email is Required";
        }

    }

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="f-name">First Name</label>
    <input type="text" id="f-name" name="first-name" value="<?php echo $FirstName;?>">
    <span><?php echo $FirstnameErr;?></span><br>
    <label for="l-name">Last Name</label>
    <input type="text" id="l-name" name="last-name" value="<?php echo $LastName;?>">
    <span><?php echo $lastnameErr;?></span><br>
    <label for="e-mail">E-Mail</label>
    <input type="email" id="e-mail" name="email" placeholder="your email id" value="<?php echo $Email;?>">
    <span><?php echo $emailErr;?></span><br>
    <button name="submit">Submit</button>
</form>

<?php
if(isset($_POST["submit"])) {
   if(!empty($FirstName)&&!empty($LastName)&&!empty($Email) ){
       echo $FirstName . "<br>" . $LastName . "<br>" . $Email;
   }
}
?>










</body>
</html>