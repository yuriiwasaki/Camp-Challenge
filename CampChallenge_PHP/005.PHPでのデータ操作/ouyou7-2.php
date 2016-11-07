<?php
session_start();
if(empty($_SESSION['name'])){

    $_SESSION['name']=null;
}
if(empty($_SESSION['hobby'])){

    $_SESSION['hobby'] =null;

}

?>
<html lang ="ja">
<head>
    <meta charset="utf-8">
    <title>プロフィールページ</title>
</head>
<body>

        <h1>Your profile</h1>
        <p>以下の例を参考にあなたの情報を入力してください</p>
        <td>例：
            <li>名前:山川のりこ
            <li>性別:female
            <li>趣味:美術鑑賞
        </td>
        <h2>プロフィール入力欄</h2>
        <form action="ouyou7.php" method='post'>

        名前:<input type="text" name="txtName" value="<?php echo $_SESSION['name']; ?>"> <br>
        <p>性別</p>
            <input type="radio" value="1" name="rdoSample" <?php if($_SESSION['gender'] =='1'){echo 'checked';} ?>>female<br>
            <input type="radio" value="2" name="rdoSample"  <?php if($_SESSION['gender'] =='2'){echo 'checked';}?>> male<br>
            <input type="radio" value="3" name="rdoSample" <?php if($_SESSION['gender'] =='3'){echo 'checked';}?> >other


        <p>趣味</p>
        <textarea name="mulText" cols="40" rows="4" placeholder="<?php print $_SESSION['hobby']; ?>"></textarea> <br>
        <input type="submit" name="btnSubmit">
        </form>

        <!-- <form enctype="multipart/form-data" action="sample.php" method="post">
        ファイル選択：<input name="userfile" type="file"/>
        <input type="submit" name="btnSubmit">
        </form> -->

        <?php var_dump($_SESSION["gender"]); ?>

</body>
</html>
