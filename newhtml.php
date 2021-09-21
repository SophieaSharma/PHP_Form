<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/*html can be used in php file , but php
cannot be used in html file*/
$title = "Sophiea's Website";
?>
<ul>
    <h1><?php echo $title; ?></h1>
 <?php for($i=1; $i<=5; $i++){?>
    <li><?php echo " menu list ";echo$i; ?></li>
 <?php }?>
</ul>
<?php
$name='sophiea';
$number= 13.42;
$char=true;
?>
<p>
    <?php
    echo $name." ".$number;
    echo "<br>";
    echo $number;
    echo "<br>";
    $baby ="<h3>hello</h3>";
    echo $char ;
    echo "<br>";
    echo $baby ;
    ?>
</p>
<p>
    <?php
    $num1=87;
    $num2=93;
    echo $num1+$num2;
    echo "<br>";
    echo abs($num1-$num2);
    echo "<br>";
    echo $num1*$num2;
    echo "<br>";
    echo $num1/$num2;
    echo "<br>";
    echo "<br>";
    ?>
<?php
     //lets make an array
    //$numberList= array('s',143,true,12.76,"alesha");
    //$numberList1 =[];
    /*echo $numberList[0];
    echo "<br>";
    echo $numberList[1];
    echo "<br>";
    echo $numberList[2];
    echo "<br>";
    echo $numberList[3];
    echo "<br>";
    echo $numberList[4];
    echo "<br>";
    print_r($numberList);*/
    $arr=array(1=>10,2=>20,3=>array(1=>'a', 2=>'b', 3=>'c'), 4=>40);
    /*$arr[1]='meena';
    $arr["b"]="eena";*/
    print_r($arr);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    /*if(3<1)echo "three is less than ten";
    else echo "not";
    if(1===true)echo "yes";
    else echo "no";*/
    /*$number=109;
    switch ($number){
        case 11:
            echo "this is 11";
            break;
        case 9:
            echo "this is 9";
            break;
        case 10:
            echo "this is 10";
            break;
        default:
            echo "bye bye";

    }
    $count=0;
    while($count<5){
        echo "yes ";
        $count++;
    }
    foreach($arr as $counter){
        echo $counter. "<br>";
    }

function lets_count_some_nums(){
    for($i=1; $i<=10; $i++){
        echo $i ." ";
    }
}
lets_count_some_nums();
    function write($num1,$num2){
        $sum=$num1+$num2;
        return $sum;
    }

    echo write(1,4);
    define("num", 1234);
    echo num ."<br>";*/
    echo pow(2,3). "<br>";
    echo rand(1,10). "<br>";
    echo sqrt(100). "<br>";
    echo ceil(2.3). "<br>";
    echo floor(5.7). "<br>";
    ?>
</p>
</body>
</html