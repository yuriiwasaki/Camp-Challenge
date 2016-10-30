<?php

/*$file = fopen('ouyou10.txt'.'w');
fwrite($file,'アイウエオ');
fclose($file);*/

// ファイルを書き込みモードで開く
$fp = fopen('ouyou10.txt', 'a'); //xamppの設定の問題？
// 書き込み操作 - １行書き込み
fwrite($fp, '開始'. date('Y/m/d/ H:i:s'));
// ファイルを閉じる
fclose($fp);

/*$fp = fopen('ouyou10.txt', 'r');
// 書き込み操作 - １行書き込み
fread($fp, '開始'.date('Y/m/d/H:i:s'));
// ファイルを閉じる
fclose($fp);*/

$sales = array( "f1" =>"800", "f2" => "320", "f3"=>"120" );
ksort($sales);
print_r($sales);


$fp = fopen('ouyou10.txt', 'a');
// 書き込み操作 - １行書き込み
fwrite($fp, '終了'.date('Y/m/d/H:i:s'));
// ファイルを閉じる
fclose($fp);


/*$fp = fopen('ouyou10.txt', 'a');
// 書き込み操作 - １行書き込み
fwrite($fp, '終了'. date('Y/m/d/H:i:s'));
// ファイルを閉じる
fclose($fp);*/

//始まりと終わりの日時



/*$fp = fopen('ouyou10.txt', 'w'); //xamppの設定の問題？
// 書き込み操作 - １行書き込み
fwrite($fp, '終了');
// ファイルを閉じる
fclose($fp);*/


//echo $file = file_get_contents('$file');


//何らか変数代入

/*次の処理を実現してください。 期限:5日
１０．紹介していないPHPの組み込み関数を利用して、処理を作成してください。
講義では紹介されていないPHPの組み込み関数はたくさん存在します。
PHPの公式サイトから関数を選び、実際にロジックを作成してみてください。
また、この処理を作成するに当たり、下記を必ず実装してください。
①処理の経過を書き込むログファイルを作成する。
②処理の開始、終了のタイミングで、ログファイルに開始・終了の書き込みを行う。
③書き込む内容は、「日時と状況（開始・終了）」の形式で書き込む。
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
