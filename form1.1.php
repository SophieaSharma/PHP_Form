<?php

$firstname = $_POST["FirstName"];
$lastname = $_POST["LastName"];
$email = $_POST["EmailId"];
$college = $_POST["college"];
$number = $_POST["PhnNum"];
$submit = $_POST["submit"];

$fnames=array("sophiea", "alesha", "dalra", "samantha", "chase", "bradson");
if (isset($submit)) {
    if(in_array($firstname,$fnames)){
        echo "hey, ". $firstname. " you are our client";
    }
    else{
        echo "sorry, you are not welcome";
    }

}


?>