<?php
    require_once '../common/defineUtil.php';
    require_once '../common/scriptUtil.php';

    session_start();
    //以下のifをデファクタリング
    connect_session('name');
    connect_session('year');
    connect_session('month');
    connect_session('day');
    connect_session('tell');
    connect_session('type');
    connect_session('comment');

 ?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録確認画面</title>
</head>
  <body>
    <?php
    //SQLのテーブルを召喚する文
    if($_POST['name'] === '0'
    && !empty($_POST['year']) && !empty($_POST['month'])
    && !empty($_POST['day']) && !empty($_POST['type'])
    && !empty($_POST['tell']) && !empty($_POST['comment'])){

        $post_name = $_POST['name'];
        //date型にするために1桁の月日を2桁にフォーマットしてから格納
        $post_birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
        $post_type = $_POST['type'];
        $post_tell = $_POST['tell'];
        $post_comment = $_POST['comment'];

        //セッション情報に格納
        $_SESSION['birthday'] = $post_birthday;

    ?>

        <h1>登録確認画面</h1><br>
        名前:<?php echo $post_name;?><br>
        生年月日:<?php echo $post_birthday;?><br>
        種別:
        <?php
        if($post_type=="1"){
            echo 'エンジニア';
        }
        if($post_type=="2"){
            echo '営業';
        }
        if($post_type=="3"){
            echo 'その他';
        }
        ?>


        <br>
        電話番号:<?php echo $post_tell;?><br>
        自己紹介:<?php echo $post_comment;?><br>

        上記の内容で登録します。よろしいですか？

        <form action="<?php echo INSERT_RESULT ?>" method="POST">
        <input type="submit" name="yes" value="はい">   <!-- insert_result.phpに遷移 -->
        <input type="hidden" name="access" value="access">
        </form>
 <!-- データが不足ならどのデータが不足かを表示 からのカラムを表示 insert_result.phpに値を保持しながら戻った時にフォーム入力済みになっている遷移-->

    <?php }else{ ?>
        <h1>入力項目が不完全です</h1><br>
        再度入力を行ってください<br>
        <p style="color: red;">
            <?php
            if(empty($_POST['name'])){ echo '名前<br>'; }//名前
            if(empty($_POST['year'])){ echo '生年<br>'; }//生年月日
            if(empty($_POST['month'])){ echo '月<br>'; }
            if(empty($_POST['day'])){ echo '日<br>'; }
            if(empty($_POST['type'])){ echo '種別<br>'; }
            if(empty($_POST['tell'])){ echo '電話番号<br>'; }
            if(empty($_POST['comment'])){ echo '自己紹介<br>'; }
            echo 'が未入力です。';
            ?>
        </p>

    <?php }?>
    <form action="<?php echo INSERT ?>" method="POST">
        <input type="submit" name="no" value="登録画面に戻る">
        <input type="hidden" name="reinput" value="reinput">
    </form>
    <!-- データが不足ならどのデータが不足かを表示 insert_result.phpに値を保持しながら戻った時にフォーム入力済みになっている遷移 登録ページへの戻るリンク-->

</body>
</html>
