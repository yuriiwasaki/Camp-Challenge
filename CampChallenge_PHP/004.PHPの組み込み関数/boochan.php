<?php

    /*$bocchan_text =array(); //bocchan_textの文が配列に入る
    $read_line = 14;
    $count = 0;
    $figure = '。';
    $exchange_figure = '。'.'<br>';
    $changed_text = array(); //変えた後のbocchan_textの文が配列に入る

    $bocchan_fp = fgopen();*/






/* 経緯
    fopen 4_12_bocchan.txtを読み込む モード r
    4_12_bocchan.txtを取得
    fclose
    読み取って12まで ファイルてkシウとに読み取ったものを入れる

    その後で、。の位置で改行した文を表示
    最初に12まで読み取ったものを使って。改行を作る
    fopen 4_waganeko.txt
    追記された4_12_bocchan.txtを 表示させる
    改行
    表示

    スライド文字列編*/
    $text = array();

    $fp = fopen('4_12_bocchan.txt','r');
    // for( $count = 13; fgets( $fp ); $count++ )
    for($i=0; $i<13; ++$i)
    {
        $text[$i] = fgets($fp);
    }

    foreach($text as $key => $value ){

        echo $value;
    }

    foreach($text as $key => $value ){

        $a = str_replace('。', '。<br>',$value);
        echo $a;
    }
//12回fgets

/*
        $fp = fopen('4_12_bocchan.txt','r');
        $a =  fgets($fp).'<br>';
        echo $a;

        $b = fgets($fp).'<br>';
        echo $b;

        $c = fgets($fp).'<br>';
        echo $c;

        $d = fgets($fp).'<br>';
        echo $d;

        $e = fgets($fp).'<br>';
        echo $e;

        $f = fgets($fp).'<br>';
        echo $f;

        $g = fgets($fp).'<br>';
        echo $g;

        $h = fgets($fp).'<br>';
        echo $g;

        $i = fgets($fp).'<br>';
        echo $i;

        $j = fgets($fp).'<br>';
        echo $j;

        $k = fgets($fp).'<br>';
        echo $k;

        $l = fgets($fp).'<br>';
        echo $l;


        //12timr
        //配列 for文 foreach文の復習 繰り返し構文

        fclose($fp); //表示させただけ


        $text = str_replace('。', '。<br>',$a);
        echo $text;

        $text = str_replace('。', '。<br>',$b);
        echo $text;

        $text = str_replace('。', '。<br>',$c);
        echo $text;

        $text = str_replace('。', '。<br>',$d);
        echo $text;

        $text = str_replace('。', '。<br>',$e);
        echo $text;

        $text = str_replace('。', '。<br>',$f);
        echo $text;

        $text = str_replace('。', '。<br>',$g);
        echo $text;

        $text = str_replace('。', '。<br>',$h);
        echo $text;

        $text = str_replace('。', '。<br>',$i);
        echo $text;

        $text = str_replace('。', '。<br>',$j);
        echo $text;

        $text = str_replace('。', '。<br>',$k);
        echo $text;

        $text = str_replace('。', '。<br>',$l);
        echo $text;

        //4_demo.phpをトレースできる範囲*/



?>
