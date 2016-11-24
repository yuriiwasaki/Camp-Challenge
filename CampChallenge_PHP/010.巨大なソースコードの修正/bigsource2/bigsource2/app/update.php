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
      <title>変更入力画面</title>
</head>
<body>

    <?php

    if(!isset($_POST['id'])){
        echo '不正なアクセスです。<br>';
    }else{ ?>
    <form action="<?php echo UPDATE_RESULT ?>" method="POST">

    名前:
    <input type="text" name="name" value="<?php echo $_GET['name']; ?>">
    <br><br>

    生年月日:

    <?php $birthday = explode('-',$_GET['birthday']);     //配列$birthday?>

    <select name="year">
        <option value="">----</option>
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
        <option <?php if($i==$birthday[0]){echo "selected";}?> value="<?php echo $i;?>" ?>  <?php echo $i ;?></option>
        <?php } //対象レコードの初期値を設定


        ?>

    </select>年
    <select name="month">
        <option value="">--</option>
        <?php

        for($i = 1; $i<=12; $i++){?>
        <option  <?php if($i==$birthday[1]){echo "selected";}?> value="<?php echo $i;?>" > <?php echo $i;?></option>
        <?php } ; ?>
    </select>月
    <select name="day">
        <option value="">--</option>
        <?php
        for($i = 1; $i<=31; $i++){ ?>
        <option <?php if($i==$birthday[2]){echo "selected";}?> value="<?php echo $i; ?>"> <?php if($i==form_value('day')){echo "selected";}?> <?php echo $i;?></option>
        <?php } ?>
    </select>日
    <br><br>

    種別:
    <br>
    <?php
    for($i = 1; $i<=3; $i++){ ?>
    <input type="radio" name="type" value="<?php echo $i; ?>"<?php if($i==$_GET['type']){echo "checked";}?>><?php echo ex_typenum($i);?><br>
    <?php } ?>
    <br>

    電話番号:
    <input type="text" name="tell" value="<?php echo $_GET['tell']; ?>">
    <br><br>

    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?php echo $_GET['comment']; ?></textarea><br><br>
    <input type="hidden" name="id"  value="<?php echo $_POST['id']; ?>" >
    <input type="hidden" name="mode"  value="RESULT">
    <input type="submit" name="btnSubmit" value="以上の内容で更新を行う">
    </form>
    <form action="<?php echo RESULT_DETAIL .'?id='.$_GET['userID'].'&name='.$_GET['name']. '&birthday='.$_GET['birthday'].'&type='.$_GET['type'].'&tell='.$_GET['tell'].'&comment='.$_GET['comment'].'&newdate='.$_GET['newdate']; ?>" method="POST">

        <input type="submit" value="詳細画面に戻る"style="width:100px">
    </form>


    <?php } //直リンク防止 ?>


    <?php echo return_top();?>
</body>
</html>
