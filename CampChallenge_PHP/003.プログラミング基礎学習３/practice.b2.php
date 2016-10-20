<?php
//引数$argument まずは普通のif文で描いて見る


//関数だとどうなるのか？


function condition($argument){
    if($argument % 2 == 0){
        echo "偶数";
    }
    else{
        echo "奇数";
    }
}
    condition(6);

//関数 その値が偶数か奇数かを判別、表示


?>
