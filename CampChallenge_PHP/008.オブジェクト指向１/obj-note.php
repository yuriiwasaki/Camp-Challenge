<?php
//クラスの利用
class Human{
    private $name ='';
    private $age =0;
    public function setHuman($n,$a){ } //public function setHuman(メソッド){フィールド}
    //public function setHuman($n,$a){ }
    //public function setHuman($n,$a){ }
}

$mone = new Human();
$mone -> setHuman('mone',33); //

$mone ->showName();
$mone ->showAge();

//クラスの継承
// 定義 class クラス名 extends 継承したいクラス名{}
// 利用 $オブジェクト格納用変数 -> 継承元で定義されていたメソッド名;

class Painter extends Human {
    public function watch(){}
    public function draw(){}

}
class Model extends Human{
    public function pose(){}
    public function show(){}
    //public function (){}
}

$mone = new Painter();
$mone -> setHuman('mone',33);
$mone -> draw();

?>
