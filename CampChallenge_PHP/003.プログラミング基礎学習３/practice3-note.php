<?php

    $global_number = 5;
        function check_scope(){
            static $local_number=1;
            global $global_number;
            echo "ローカル:$local_number<br>";
            echo "グローバル".
            $global_number."<br>";
            $local_number+=1;
            $global_number+=1;
    }
    check_scope();
    check_scope();
    echo $local_number."<br>"; //エラー
    echo $global_number."<br>"; //エラー

//global宣言：あるユーザー定義関数の外にある変数を関数の中で使いたかったらgrobalと記述する
//static宣言

/*echo function my_profile(){
    echo 'Yuri Iwasaki' .'<br>';
    echo '1988年09月09日' .'<br>';
    echo '２習慣前に計算がない星から着陸しました、この場所の言葉や習慣が全く違うので驚いています。';
}

my_profile();


関数*/
?>
