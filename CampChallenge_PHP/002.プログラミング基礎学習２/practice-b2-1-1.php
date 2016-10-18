<?php
$num = 0;
$message = '';
switch ($num){
    case 1:
        $message = 'one';
        break;
    case 2:
        $message = 'two';
        break;
    default:
        $message = '想定外の値です。';
        break;
}
echo $message;

    /*$num ='';

    switch($num){
        case '1':
            $num ='1';
            $msg= 'one';
            break;
                echo $msg;
        case '2':
            $num ='2';
            $msg = 'two';
            break;
                echo $msg;
        case '3':
            $num ='';
            $msg = '想定外です';
            break;
                echo $msg;
    }*/
?>
