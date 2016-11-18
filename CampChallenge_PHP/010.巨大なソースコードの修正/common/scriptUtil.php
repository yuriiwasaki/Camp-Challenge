<?php
require_once '../common/defineUtil.php';
function connect_session($value){

    if(isset($_POST[$value])){
        $_SESSION[$value] = $_POST[$value];
    }else{
        $_SESSION[$value] = null;
    }

}

function return_top(){
    return "<a href='".TOP_URI."'>トップへ戻る</a>";
}

?>
