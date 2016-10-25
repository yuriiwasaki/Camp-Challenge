<?php

    //$file = 'practice8.txt';
    /*$intro = file_put_contents('practice8.txt');
    echo $intro;

    $file = 'practice8.txt';
    echo $fopen('$file');*/

    //$file1 = 'practice8.txt';
    $file1 = fopen('practice8.txt','r');//絶対パスを指定
    //fwrite($file1,'A');'

    $file_txt = fgets($file1);
    echo $file_txt;
    fclose($file1).'<br>';


//8．ファイルに自己紹介を書き出し、保存してください。
//8a：自己紹介ファイルを作った→ファイルがありますを定義→そのファイルを（書き込み）モードで開く→ファイルのtxt表示→保存→閉じる




//9．ファイルから自己紹介を読み出し、表示してください。
//9a：ファイルがあります→ファイルの中をみる→txtを取り出す→ファイルを読み出しモードで開く→txtを表示→閉じる

$filename ='practice8.txt';
//file_put_contents($filename,"this is test!"); Permissionエラーで表示できず
readfile($filename); //結局readfile();で呼ぶ

?>
