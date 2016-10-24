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
        if($solo == $yamanaka){
                break;
        }

        foreach($solo as $key => $value){
            if($key == 'id' || $key =='adress'){
                continue;
            }
        echo  $value;
        }
        }
//配列についたデフォルトの要素名 左から順番に Key[0]; 判別、ifぶん breakを使う
//課題10:課題9の処理のうち2人目まででforeachのループを抜けるようにする
?>
