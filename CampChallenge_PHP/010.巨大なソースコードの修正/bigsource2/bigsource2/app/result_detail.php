<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>ユーザー情報詳細画面</title>
</head>
  <body>
    <?php


    ?>

    <h1>詳細情報</h1>
    名前:<?php echo $_GET['name'];?><br>
    生年月日:<?php echo $_GET['birthday'];?><br>
    種別:<?php echo ex_typenum($_GET['type']);?><br>
    電話番号:<?php echo $_GET['tell'];?><br>
    自己紹介:<?php echo $_GET['comment'];?><br>
    登録日時:<?php echo date('Y年n月j日 G時i分s秒', strtotime($_GET['newdate'])); ?><br>

    <form
    action="<?php echo UPDATE .'?userID='.$_GET['id'].'&name='.$_GET['name']. '&birthday='.$_GET['birthday'].'&type='.$_GET['type'].'&tell='.$_GET['tell'].'&comment='.$_GET['comment'].'&newdate='.$_GET['newdate']; ?>"method="POST">

        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
        <input type="submit" name="update" value="変更"style="width:100px">
    </form>
    <form action="<?php echo DELETE .'?userID='.$_GET['id'].'&name='.$_GET['name']. '&birthday='.$_GET['birthday'].'&type='.$_GET['type'].'&tell='.$_GET['tell'].'&comment='.$_GET['comment'].'&newdate='.$_GET['newdate']; ?>" method="POST">
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
        <input type="submit" name="delete" value="削除"style="width:100px">
    </form>

    <?php

    echo return_top();
    ?>
    <form action="<?php echo SEARCH_RESULT ?>" method="GET">
        <?php if(isset($_GET['name'])){?>
            <input type="hidden" name="name" value="<?php echo $_GET['name'];?>">
        <?php } ?>
        <?php $birthday = explode('-',$_GET['birthday']);     //配列$birthday?>
            <input type="hidden" name="year" value="<?php echo $birthday[0];?>">
            

        <?php if(isset($_GET['type'])){ ?>
            <input type="hidden" name="type" value="<?php echo $_GET['type'];?>">
        <?php } ?>


        <input type="submit" name="back" value="検索画面へ戻る">
    </form>


  </body>
</html>
