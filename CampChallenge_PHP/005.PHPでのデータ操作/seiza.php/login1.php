<?php
    require_once 'const6.php';
    $pass = PASSWORD;//passwordが入る
    $chkpass=null;//空
    if(empty($_POST['password'])){
        $chkpass=null;
    }else{
        $chkpass=$_POST['password'];
    }
//セッションタイム 掲示板書き込みフォーム 内容表示 $_POST fpで書き込み

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title><?php echo LOGIN ?></title>
</head>
<body>
    <h1>ログイン画面</h1>

    <?php
    if($chkpass!==$pass){
        if($chkpass !== null){
            echo 'パスワードが異なります。もう一度ログインパスワードを入力してください<br>';
        }else{
            echo 'ログインパスワードを入力してください<br>';
        }
        ?>
        <form action="<?php echo LOGIN ?>" method="POST">
            <input type="text" name="password">
            <input type="submit" name="btnSubmit" value="ログイン">
        </form>
    <?php
    }else{
        echo 'ログインに成功しました。三秒後にサービストップに移動します';
        echo '<meta http-equiv="refresh" content="3;URL='.INPUT.'">';

        session_start();
        $_SESSION['last_access']=mktime();
    }
    ?>
</body>
</html>
