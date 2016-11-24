<?php
session_start();
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>削除確認画面</title>
</head>
  <body>
<?php if(!isset($_POST['id'])){
      echo '不正なアクセスです。<br>';
  }else{ ?>
      <h1>削除確認</h1>
      以下の内容を削除します。よろしいですか？
      名前:<?php echo $_GET['name'];?><br>
      生年月日:<?php echo $_GET['birthday'];?><br>
      種別:<?php echo ex_typenum($_GET['type']);?><br>
      電話番号:<?php echo $_GET['tell'];?><br>
      自己紹介:<?php echo $_GET['comment'];?><br>
      登録日時:<?php echo date('Y年n月j日 G時i分s秒', strtotime($_GET['newdate']));?><br>

      <form action="<?php echo DELETE_RESULT; ?>" method="POST">

          <input type = "hidden" name = "id" value ="<?php echo $_POST['id']; ?>" >
          <input type="submit" name="YES" value="はい"style="width:100px">
      </form><br>
      <form action="<?php echo RESULT_DETAIL .'?id='.$_GET['userID'].'&name='.$_GET['name']. '&birthday='.$_GET['birthday'].'&type='.$_GET['type'].'&tell='.$_GET['tell'].'&comment='.$_GET['comment'].'&newdate='.$_GET['newdate']; ; ?>" method="POST">
          <input type="submit" name="NO" value="いいえ 詳細に戻る"style="width:100px">
      </form>

      <?php
       } ?>

    <?php echo return_top();
    ?>
   </body>
</html>
