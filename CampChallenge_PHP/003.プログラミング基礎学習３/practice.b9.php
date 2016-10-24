<?php

    $yamada = array (
    'id' =>  '101',
    'name' =>  '山田太郎',
    'b-day' =>  '1985年04月30日',
    'adress' =>  '東京都 千代田区 2-4-17'
    );

    $tanaka = array (
    'id' => '102',
    'name' => '田中花子',
    'b-day' => '1984年07月30日',
    'adress' => '東京都 渋谷区 2-3~14'
    );

    $yamanaka = array (
    'id' => '103',
    'name' => '山中二郎',
    'b-day' => '1982年11月30日',
    'adress' => '東京都 文京区 2-1-18'
    );
    $trio = array($yamada,$tanaka,$yamanaka);

    foreach($trio as $solo){

        foreach($solo as $key => $value){
            if($key == 'id' || $key =='adress'){
                continue;
            }
        echo  $value;
        }
        }
        echo var_dump;


//配列に３人分のプロフをまとめて入れる forreach2回 value 一人分のプロフcontinueで飛ばす
//課題9:3人分のプロフィールについてIDと住所以外を表示する処理を実行する。2重のforeachとcontinueを必ず用いること
?>
