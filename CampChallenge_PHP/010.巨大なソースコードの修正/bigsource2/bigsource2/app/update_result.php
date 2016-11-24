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
      <title>更新結果画面</title>
</head>
  <body>
      <?php if(!isset($_POST['id'])){
          echo '不正なアクセスです。<br>';
      }else{

      $birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);

      $result = update_profile($_POST['id'],$_POST['name'],$birthday,$_POST['tell'],$_POST['type'],$_POST['comment']);


      //dbアクセスでデータを更新する関数をdbaccessUtil.phpに作成する
      //エラーが発生しなければ表示を行う
      if(!isset($result)){
      ?>
      <h1>更新確認</h1>

      <?php
      echo '名前:'. $_POST['name'].'<br>';
      echo '生年月日:'.$birthday.'<br>' ;

      echo '種別:';

            if($_POST['type']=="1"){
                echo 'エンジニア'.'<br>';
            }
            if($_POST['type']=="2"){
                echo '営業'.'<br>';
            }
            if($_POST['type']=="3"){
                echo 'その他'.'<br>';
            }


      echo '自己紹介:'.$_POST['comment'].'<br>';
      ?>
      <p>以上の内容で更新しました。</p><br>
      <?php
      }else{
          echo 'データの更新に失敗しました。次記のエラーにより処理を中断します:'.$result;
      }
        }?>

    <?php echo return_top();
    ?>
  </body>
</html>
