<?php


if(isset($_POST['profilesID'])){try{ $pdo_object = new PDO('mysql: host=localhost;dbname=Challenge_db;charset=utf8','yuri','yuri1988');

    $sql = "DELETE FROM profiles WHERE profileSID=:profileID";
    $query = $pdo_object -> prepare($sql);

    $profilesID =$_POST['profilesID'];
    $query->bindValue(':profileID',$profilesID);

    $query -> execute();
}catch(PDOException $E){
    die('接続に失敗しました;'.$E-> getMessage());
}

$pdo_object = null;
}
?>

<html lang ="ja">
<head>
    <meta charset="utf-8">
    <title>プロフィールページ</title>
</head>
<body>

        <h1>名前の検索</h1>
        <p>消したいprofilesIDを入力してください 例：山</p>
        <h2>入力欄</h2>
        <form action="dbs10.php" method='post'>

        profilesID:<input type="text" name="profilesID">


        <input type="submit" value="送信する" >
        </form>



</body>
</html>
