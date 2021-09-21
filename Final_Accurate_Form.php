<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Name=$_POST["name"];
    $Email=$_POST["email"];
    $FatherName=$_POST["father-name"];
    $MotherName=$_POST["mother-name"];
    $Submit=$_POST["submit"];
    $NameErr=$EmailErr=$FatherNameErr=$MotherNameErr="";
    if(empty($Name)){
        $NameErr="* Name is Required";
    }
    if(empty($Email)){
        $EmailErr="* Email is Required";
    }
    else{
        if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
            $EmailErr="Email is not Validate";
        }
    }


}

?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="name">Name</label><br>
    <input type="text" id="name" name="name" placeholder="Write Your Name" value="<?php echo $Name;?>">
    <span><?php echo $NameErr;?></span><br>
    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" placeholder="Write Your Email" value="<?php echo $Email;?>"">
    <span><?php echo $EmailErr;?></span><br>
    <label for="fathername">Father's Name</label><br>
    <input type="text" id="fathername" name="father-name" placeholder="Write Your Fathers Name" value="<?php echo $FatherName;?>""><br>
    <label for="mothername">Mother's Name</label><br>
    <input type="text" id="mothername" name="mother-name" placeholder="Write Your Mother's Name" value="<?php echo $MotherName;?>""><br>
    <input type="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($Submit)){
    $connection= mysqli_connect('localhost', 'root', '', 'Login_App');
    if($connection->connect_error) {
        echo $connection->connect_error;
    }
    if($connection){
        echo"we are connected";
    }else{
        echo "sorry";
    }
}
?>