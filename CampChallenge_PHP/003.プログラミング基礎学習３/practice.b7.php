<?php

        /*global $global_number = 3;

        function check_scope(){

            global $global_number;
            echo $global_number * 2;

        }*/

        $global_number = 3;
        function a(){
            global $global_number;
            static $b = 0;
            $global_number = $global_number * 2;
            $b = $b +1;
            echo $global_number.$b;
        }
        a();
        a();
        a();
        a();
        a();
        a();
        a();
        a();
        a();
        a();
        a();
        a();
        a();
        a();
        a();
        a();
        a();
        a();
        a();


/*課題7:引き数、戻り値はなしの関数を用意。初期値3のglobal値を2倍していく、
ローカルな値はstaticとしてその関数が何回実行されたのかを保持していくような関数である。
この関数を20回呼び出す for文*/
?>
