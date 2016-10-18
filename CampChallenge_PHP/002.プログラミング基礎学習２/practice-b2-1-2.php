<?php

$num = 'あ';
$message = '';
switch ($num){
    case 'A':
        $message = '英語';
        break;
    case 'あ':
        $message = '日本語';
        break;
    default:
        $message = '';
        break;
}
echo $message;

?>
