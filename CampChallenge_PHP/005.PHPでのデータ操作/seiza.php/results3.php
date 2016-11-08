<?php
 // $file_txt = file_get_contents('input2.php');
 require_once 'const6.php';
 session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['POST'] = $_POST['mulText'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title><?php echo SHOW; ?></title>
</head>
<body>
    <h1>投稿</h1>
    <?php
    if(!empty($_POST['name']) || !empty($_POST['mulText'])) //投稿本文がある場合)
    {
        echo $_POST['name'].'<br>';
        echo $_POST['mulText'].'<br>';
    }else{
        echo '入力データが不十分です。もう一度入力を行ってください。';
    }?>
    <a href ="<?php echo INPUT; ?>">戻る</a>

</body>
</html>
