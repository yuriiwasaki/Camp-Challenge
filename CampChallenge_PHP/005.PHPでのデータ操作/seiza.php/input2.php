<?php

// $fp =fopen('results3.php','w');
// fwrite($fp, 'www');
// fclose($fp);
 require_once 'const6.php';
 require_once 'function4.php';
 date_default_timezone_set('Asia/Tokyo');
session_chk();
if(empty($_SESSION['name'])){

    $_SESSION['name']=null;
}
if(empty($_SESSION['POST'])){

    $_SESSION['POST'] =null;

}
 // $file_txt = file_get_contents('input2.php');
 //POST actionでの指定先に飛ぶ　results3.phpにPOSTに格納された値が飛ぶ resultsでの処理　SESSIONにPOST２つの値を入れる
 if(!isset($_COOKIE['login_count']) && !isset($_COOKIE['last_login'])){
     $lcount = 1;
     $llogin = mktime();
     setcookie('login_count',$lcount);
     setcookie('last_login',$llogin);
     setcookie('SAVEDPHPSESSID',$_COOKIE['PHPSESSID']);
 }else if($_COOKIE['PHPSESSID']!=$_COOKIE['SAVEDPHPSESSID']){
     setcookie('login_count',$_COOKIE['login_count']+1);
     $lcount = $_COOKIE['login_count'];
     $llogin = $_COOKIE['last_login'];
     setcookie('last_login',mktime());
     setcookie('SAVEDPHPSESSID',$_COOKIE['PHPSESSID']);
 }else{
     $lcount = $_COOKIE['login_count'];
     $llogin = $_COOKIE['last_login'];
 }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title><?php echo INPUT ?></title>
</head>
<body>
    <h1>掲示板トップ</h1>
    <p>今回で<?php echo $lcount ?>回目のアクセスです！最終ログイン日時 <?php echo date('Y年m月d日 H時i分s秒',$llogin)?> </p><br>


    <form action="<?php echo SHOW ?>" method="POST">
        名前:
        <input type="text" name="name" value="<?php echo $_SESSION['name'];  ?>">
        <br><br>

        メッセージ
        <textarea name="mulText"  placeholder="<?php print $_SESSION['POST']; ?>"></textarea>
        <br><br>

        <input type="submit" name="btnSubmit" value="投稿する">
    </form>
    <br><br>
</body>
</html>
