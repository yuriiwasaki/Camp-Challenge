<?php

    function i_profile(){


        $id = '101';


        $name = "山田太郎";


        $date = '1985年04月30日';


        $adress ='東京都 千代田区 2-4-17';


        $arr = array();

        $arr = array(

            'id' =>  $id,
            'name' =>  $name,
            'b-day' =>  $date,
            'adress' =>  $adress
        );

        return $arr;


    }

    $arr = i_profile();

    foreach ($arr as $key => $value ){
        echo  $key . $value;
    }

    echo $arr['adress'];


//課題5:戻り値としてある人物のid(数値),名前,生年月日、住所を返却し、受け取った後は全情報を表示する 連想配列

?>
