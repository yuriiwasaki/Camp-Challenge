<?php


session_start();
$access_time = date('Y年m月d日');//1回目のアクセス
$_SESSION['lastDate'] = $access_time;//lastDateという名前で$access_time保存

echo '前回のアクセスは'. $_SESSION['lastDate'].'でした。';

/*session_start();

$_SESSION['message'] ='こんにちは'; $_SESSION [] の中にデータの名前

echo $_SESSION['message'];*/



//セッションで 現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示する機能を作成
?>
