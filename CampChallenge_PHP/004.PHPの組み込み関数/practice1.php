<?php

$stamp = mktime(00,00,00,01,01,2016); //1
echo $stamp/(60*60*24*365).'<br>';

$today = date('Y/m/d/H/i');
echo $today.'<br>';

print date("Y年m月d日 H時i分s秒", time()).'<br>';
//時刻を正確にする方法はないものか？

$today = date('Y/m/d/H:i:s');
echo $today.'<br>';//2

$stamp = mktime(00,00,10,04,11,2016).'<br>';
echo $stamp.'<br>';
echo date('Y-m-d,H:i:s', strtotime('20161104100000'));

//3 2016年11月４日 時 分 秒 表示


//print date("Y年m月d日 H時i分s秒", time()).'<br>';


//$date1= date('Y/m/d',$stamp);
// １．2016年1月1日 0時0分0秒のタイムスタンプを作成し、表示してください。
// ２．現在の日時を「年-月-日 時:分:秒」で表示してください。
// ３．2016年11月4日 10時0分0秒のタイムスタンプを作成し、
// 「年-月-日 時:分:秒」で表示してください。*/

?>
