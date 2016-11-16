<?php
class Human{
    public $name ='';
    public $age =0;
    public function setHuman($n,$a){

        $this -> name = $n;
        $this -> age = $a;

    }
    public function echoHuman(){

        echo $this -> name;
        echo $this -> age;
    }

}

class Painter extends Human {
    public function clear(){
        $this -> name = null;
        $this -> age = 0;
    }
}


$mone = new Human();
$mone -> setHuman('mone',33);
$mone -> echoHuman();
echo '<br>';
$A = new Painter;
$A -> clear();
$A -> echoHuman();
?>
