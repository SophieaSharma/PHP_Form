<?php
class Students{
    //constants
    const GIRLS_UNIFORM='Skirt,Shirt,Socks,Shoes,Tie';
    const BOYS_UNIFORM='Pants,Shirt,Socks,Shoes,Tie';
    //properties
    public $name;
    public $class;
    private $roll_num;

    function __construct($name,$class)
    {
        $this->name=$name;
        $this->class=$class;

    }
    public function return_roll_num($roll_num){
        return $this->roll_num=$roll_num;
    }
    function return_constant(){
        return self::BOYS_UNIFORM;
    }
}
$student_1=new Students('Lisa','X-A');
$student_2=new Students('Mohan','X-D');

echo$student_1->name."  ".$student_1->class."  ".$student_1->return_roll_num('5').":-";
echo Students::GIRLS_UNIFORM."<br>";
echo$student_2->name."  ".$student_2->class."  ".$student_2->return_roll_num('21').":-";
echo Students::BOYS_UNIFORM."<br>";
echo $student_2->return_constant()."<br>";
/*if($student_1 instanceof Students){
    echo"yes! You are right";
}else{
    echo"No";
}*/
/*echo $student_1->return_class() . "<br>";
echo $student_1->return_roll_num('32');
echo $student_2->class;*/