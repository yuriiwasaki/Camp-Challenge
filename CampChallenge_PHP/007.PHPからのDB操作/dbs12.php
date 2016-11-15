<?php



//課題12:検索用のフォームを用意し、名前、年齢、誕生日を使った複合検索ができるようにしてください。
//$submit の人の名前を dbからSELECTで把握してくる
//!=null
    echo '以下に結果を表示'.'<br>';
if(isset($_POST)){


    if($_POST != null){

        //検索する 値が一致する場合 しない場合 入力値が空の場合
        //isset かつ$_POST['txtName']が=nullでない場合true
        try{$pdo_object = new PDO('mysql: host=localhost;dbname=Challenge_db;charset=utf8','yuri','yuri1988');

        $name =$_POST['txtName'];
        $age =$_POST['age'];
        $birthday =$_POST['birthday'];
if( $age != null){

        $sql = "SELECT * FROM profiles WHERE (name LIKE :name)AND(age=:age)AND(birthday LIKE :birthday)";
    }else{
            $sql = "SELECT * FROM profiles WHERE (name LIKE :name)AND(birthday LIKE :birthday)";
    }

        $query = $pdo_object -> prepare($sql);


        $query->bindValue(':name',"%$name%");
        if( $age != null){
            $query->bindValue(':age',$age);
        }

        $query->bindValue(':birthday',"%$birthday%");
        $query -> execute();
        $result = $query -> fetchall(PDO::FETCH_ASSOC);



        }catch(PDOException $Exception){
            die('接続に失敗しました;'.$Exeption -> getMessage());
        }
        if(empty($result)){
            echo $name .'は見つかりません。';

        }
        $pdo_object = null;

        // foreach ($result as $key => $value) {
        // echo '<br>';
        // foreach ($value as $key => $value2) {
        // echo $key,$value2.'<br>';
        // }}

    }else{
        echo '入力値が空になっています';
    }

}

//$submit = $_POST['txtName'];
//echo $submit;

//課題8:検索用のフォームを用意し、名前の部分一致で検索＆表示する処理を構築してください。同じページにリダイレクトするPOST処理と、POSTに値が入っているかの条件分岐を活用すれば、一つの.phpで完了できますので、チャレンジしてみてください
?>

<html lang ="ja">
<head>
    <meta charset="utf-8">
    <title>プロフィールページ</title>
</head>
<body>

        <h1>名前の検索</h1>
        <p>探したい文字を入力してください 例：山</p>
        <h2>入力欄</h2>
        <form action="dbs12.php" method='post'>

        名前:<input type="text" name="txtName" value=""> <br>
        年齢:<input type="text" name="age" value=""> <br>
        誕生日:<input type="text" name="birthday" value=""> <br>

        <input type="submit" value="送信する" >
        </form>
            <h3>dbと一致した結果を表示</h3>
            <p><?php
            if(!empty($result)){
                foreach ($result as $key => $value) {
                echo '<br>';
                foreach ($value as $key => $value2) {
                echo $key,$value2.'<br>';
                if(!is_array($result)){//関数is_array 配列だとtrue
                    echo '検索結果がありません'.'<br>';
                }
            }

        }
        }


        //var_dump($result);
        ?>

    </p>
</body>
