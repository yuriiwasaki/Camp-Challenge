<?php require_once '../common/scriptUtil.php'; ?>
<?php require_once '../common/dbaccesUtil.php'; ?>
<?php
//5.insert_result.phpにて、直接リンクしてアクセスしてしまった際のエラー処理が存在しない。これを、insert_confirmからのhiddenされたフォームによるPOSTを利用して実現しなさい
if(!isset($_POST['access'])){
    echo '不正なアクセスです。';
}else{

    session_start();
    insert_db($_SESSION['name'], $_SESSION['birthday'],$_SESSION['tell'],$_SESSION['type'],$_SESSION['comment']);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録結果画面</title>
</head>
<body>


    <h1>登録結果画面</h1><br>
    名前:<?php echo $_SESSION['name'];?><br>
    生年月日:<?php echo $_SESSION['birthday'];?><br>

    種別:<?php
    if($_SESSION['type']=="1"){
        echo 'エンジニア';
    }
    if($_SESSION['type']=="2"){
        echo '営業';
    }
    if($_SESSION['type']=="3"){
        echo 'その他';
    }
    ?><br>

    電話番号:<?php echo $_SESSION['tell'];?><br>
    自己紹介:<?php echo $_SESSION['comment'];?><br>
    以上の内容で登録しました。<br>

    <?php }
    echo return_top();
//     プロフィール用のDBに値を挿入。この際、現在時(年日時分)を組み込み関数で取得し、追加。
// 「以上の内容で登録しました。」とinsert_confirmのようにフォームで入力された値を表示
// 接続に失敗したときの表示などもカバーすること
//登録ページへの戻るリンク

?>

</body>

</html>
