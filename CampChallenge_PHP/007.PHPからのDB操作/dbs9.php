<?php

//$submit の人の名前を dbからSELECTで把握してくる!=null
if(isset($_POST['txtName'])){


    if($_POST['txtName'] != null){

        //検索する 値が一致する場合 しない場合 入力値が空の場合
        //isset かつ$_POST['txtName']が=nullでない場合true
        try{$pdo_object = new PDO('mysql: host=localhost;dbname=Challenge_db;charset=utf8','yuri','yuri1988');
            $pdo_object->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);

        $profileID =$_POST['profileID'];
        $name =$_POST['txtName'];
        $age =$_POST['age'];
        $birthday =$_POST['birthday'];
        $tell =$_POST['tell'];

        $sql = "INSERT INTO profiles(profileSID,name,tell,age,birthday) VALUES (:profileID,:name,:tell,:age,:birthday)";

        $query = $pdo_object -> prepare($sql);

        $query->bindValue(':profileID',$profileID);
        $query->bindValue(':name',$name);
        $query->bindValue(':tell',$tell);
        $query->bindValue(':age',$age);
        $query->bindValue(':birthday',$birthday);

        $query -> execute();

        }catch(PDOException $E){
            die('接続に失敗しました;'.$E-> getMessage());
        }

        $pdo_object = null;

    }
}

//課題9:フォームからデータを挿入できる処理を構築してください。 INSERT文

?>

<html lang ="ja">
<head>
    <meta charset="utf-8">
    <title>プロフィールデータ入力フォーム</title>
</head>
<body>

        <h1>名前の検索</h1>
        <p>探したい文字を入力してください 例：山</p>
        <h2>入力欄</h2>
        <form action="dbs9.php" method='post'>

        profileID:<input type="text" name="profileID">
        年齢<input type="text" name="age">
        誕生日<input type="text" name="birthday">
        Tel<input type="text" name="tell">
        名前:<input type="text" name="txtName"> <br>


        <input type="submit" value="送信する" >
        </form>

            <!-- <?php
            // if(!empty($result)){
            //     foreach ($result as $key => $value) {
            //     echo '<br>';
            //     foreach ($value as $key => $value2) {
            //     echo $key,$value2.'<br>';
            //     if(!is_array($result)){//関数is_array 配列だとtrue
            //         echo '検索結果がありません'.'<br>';
            //     }
            // }

            //データを送ることができた場合、できなかった場合、入力値がない場合
            // profileID,name,tell,age,birthday
            //

        //}
        //}


        //var_dump($result);
        ?> -->



</body>
</html>
