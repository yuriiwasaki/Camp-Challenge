<?php

/*$file = 'ouyou10.txt';
$file1 = fopen('$file','a').'<br>'; //日時、開始
$file_txt = fgets('$file1','a'); 追記*/

$file = 'ouyou10.txt';
$today = date('Y/m/d/H:i:s');
file_put_contents('$file','$today','開始');



$sales = array('f1'=>'800', 'f2'=>'320' ,'f3'=>'120' );
ksort($sales);
print_r($sales);

file_get_contents('$file');

echo file_put_contents('$file','$today','終了');


fclose($file1).'<br>'; //日時、終了

//何らか変数代入


/*次の処理を実現してください。 期限:5日
１０．紹介していないPHPの組み込み関数を利用して、処理を作成してください。
講義では紹介されていないPHPの組み込み関数はたくさん存在します。
PHPの公式サイトから関数を選び、実際にロジックを作成してみてください。
また、この処理を作成するに当たり、下記を必ず実装してください。
①処理の経過を書き込むログファイルを作成する。
②処理の開始、終了のタイミングで、ログファイルに開始・終了の書き込みを行う。
③書き込む内容は、「日時　状況（開始・終了）」の形式で書き込む。
④最後に、ログファイルを読み込み、その内容を表示してください。

使ってみる関数
Ksort キーを昇順にソートする
$sales = array( "f1" =>"800", "f2" => "320", "f3"=>"120" );
ksort($sales);
print_r($sales);

日時
$today = date('Y/m/d/H:i:s');
echo $today.'<br>';
.連結もできるし、配列に入れてfile_put_contentsに入れることもできる。
*/
?>
