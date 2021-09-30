<?php
class Fruits{
    //properties
    public $color;
    private $weight;
    const SUGAR="yes";
    //methods
  public function set_color($color){
      $this->color=$color;
  }
  public function get_color(){
      return $this->color;
  }

  public function set_weight($weight){
      $this->weight=$weight;
  }
  public function get_weight(){
      return $this->weight;
  }
  public function howmuchsugar(){
      return self::SUGAR;
  }

}

//lets make some objects
$apple=new Fruits();
echo $apple->howmuchsugar() ;
/*$apple->set_weight('123');
echo $apple->get_weight();

$orange=new Fruits();
$apple->set_color('red');
echo $apple->get_color()."<br>";
$orange->set_color('orange');
echo $orange->get_color();

*/?>