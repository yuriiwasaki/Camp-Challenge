<?php require_once '../common/defineUtil.php';
    require_once '../common/scriptUtil.php';
    session_start();
    if(empty($_SESSION['name'])){

        $_SESSION['name']=null;
    }
//6.insert_result.phpにて、SQLを実行した際に現在時刻が正しい型で格納されない。これを修正しなさい
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>登録画面</title>
</head>
<body>

    <form action="<?php echo INSERT_CONFIRM ?>" method="POST">
    名前:
    <input type="text" value="<?php if(isset($_SESSION['name']) && isset($_POST['reinput'])){echo $_SESSION['name'];} ?>" name="name">
    <br><br>

    生年月日:
    <select name="year">
        <option value="">----</option> <!-- 2 <option value="ハイフン">valueの値を空欄にしてinsert_confirm側で未入力の場合弾くように判別、月、日においても同様に行った。-->
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
        <option  <?php  if(isset($_SESSION['year']) && $i==$_SESSION['year']  && isset($_POST['reinput'])){echo 'selected'; }?> value="<?php echo $i;?>"><?php echo $i ;?></option>
        <?php } ?>
    </select>年
    <select name="month">
        <option value="">--</option>
        <?php
        for($i = 1; $i<=12; $i++){?>
        <option <?php if(isset($_SESSION['month']) && $i==$_SESSION['month']  && isset($_POST['reinput'])){echo 'selected'; }?> value="<?php echo $i; ?>"> <?php echo $i;?> </option>
        <?php } ;?>
    </select>月
    <select name="day">
        <option value="">--</option>
        <?php
        for($i = 1; $i<=31; $i++){ ?>
        <option <?php if(isset($_SESSION['day']) && $i==$_SESSION['day'] && isset($_POST['reinput'])){echo 'selected'; }?> value="<?php echo $i; ?>"><?php echo $i;?></option>
        <?php } ?>
    </select>日
    <br><br>

    種別:
    <br>
    <input type="radio" name="type" value="1" <?php if(isset($_SESSION['type'] )&& '1'==$_SESSION['type']  && isset($_POST['reinput'])){echo 'checked';} ?>>エンジニア<br>
    <input type="radio" name="type" value="2"<?php if(isset($_SESSION['type']) && '2'==$_SESSION['type']
     && isset($_POST['reinput'])){echo 'checked';} ?>>営業<br>
    <input type="radio" name="type" value="3" <?php if(isset($_SESSION['type']) && '3'==$_SESSION['type']
     && isset($_POST['reinput'])){echo 'checked';} ?>>その他<br>

    <br>

    電話番号:
    <input type="text" value="<?php if(isset($_SESSION['tell']) && isset($_POST['reinput']) ){echo $_SESSION['tell'];} ?>" name="tell">

    <br><br>

    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?php if(isset($_SESSION['comment']) && isset($_POST['reinput'])){echo $_SESSION['comment'];}?></textarea><br><br>

    <input type="submit" name="btnSubmit" value="確認画面へ">
    <input type="hidden" name="access" value="yes">
    </form>
    <?php  echo return_top(); ?>
    <!-- 4.再度入力する際に、このままではフォームに値が保持されていない。適切な処理を施して、再度入力の際にはフォームに値を保持したままにさせなさい if文、issset ＄＿SESSIONから引き出す文をフォームの各値の下に書き加えました -->
</body>
</html>
