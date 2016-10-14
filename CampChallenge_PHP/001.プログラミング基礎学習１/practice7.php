<?php

$type = $_GET['$type'];
$price = $_GET['$price'];
$num = $_GET['$num'];


if($type == 1){
    echo 'typeは雑貨です';
}elseif ($type ==2) {
    echo '生鮮食品です';
}elseif($type ==3){
    echo 'その他です';
}

echo '<br>総額¥' . $price;
echo '<br>商品は' . $num . '点です';

if ($price >= 3000){
    $point = $price*0.04;
    echo '<br>'.$point;
}elseif($price >= 5000){
    $point = $price*0.05;
    echo '<br>'.$point;
}else{
    echo '<br>3000円以上でポイントお得';
}



//$point = (sum);
// if ($point >= 3000){
//     $point*0.04;
//     echo $point;
// }elseif($point >= 5000){
//     $point*0.05;
//     echo $point;
// }else{
//     echo "もっと買い物してください";
// }
?>
