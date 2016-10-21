<?php

function a_profile($name){


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

    $yamanaka = array(
    'id' => '103',
    'name' => '山中二郎',
    'b-day' => '1982年11月30日',
    'adress' => '東京都 文京区 2-1-18'
    );

    if ( strpos ('山田太郎',$name) !== false){
        return $yamada;
    } elseif ( strpos ('田中花子',$name) !== false){
        return $tanaka;
    } elseif (strpos ('山中二郎',$name) !== false){
        return $yamanaka;
    }


    }

    $arr = a_profile('中二');

    foreach ($arr as $key => $value ){
    echo  $key . $value;}

    //var_dump($arr);



//課題6:名前による検索プログラムを実装する。3人分のプロフィール(項目は課題5参照)をあらかじめ定義しておく。引き数にそれらのプロフィールと文字列をとり、戻り値は1人分のプロフィール情報を返却する。引き数の文字が名前に含まれる(部分一致)プロフィール情報(複数名合致する場合は最初のプロフィールとする)を戻り値として返却する。それ以降などは課題5と同じ扱いに :function 1つの中に、全員分の情報が詰まった変数が入ってる関数profilが必要e

?>
