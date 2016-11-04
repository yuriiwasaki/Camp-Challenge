<?php

//ユーザーの1回目の訪問
$access_time = date('Y年m月d日');
setcookie('LastLogindate',$access_time);//LastLoginDateに＄access_timeを保存

$lastDate = $_COOKIE['LastLogindate'];//LastLoginDateに保存されたCookie取得

echo 'お帰りなさい！○○さん！<br>';
echo '前回ログイン日は、' . $lastDate . 'です！';
//３．クッキーに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください。
?>
