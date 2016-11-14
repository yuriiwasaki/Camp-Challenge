<?php
//エラーハンドリング PDO クラスメソッドの一種
try{
        $pdo_object = new PDO('mysql: host=localhost;dbname=Challenge_db;charset=utf8','yuri','yuri1988');
        $sql = "INSERT INTO profiles(name,age,profilesID,tell,birthday) VALUES( :name,:age,:profilesID,:tell,:birthday)";//自由なユーザーを追加
        $query = $pdo_object -> prepare($sql);

        $query -> bindValue(':name','山田太郎');
        $query -> bindValue(':age','67');
        $query -> bindValue('profilesID','6');
        $query -> bindValue('tell','0120-554-667');
        $query -> bindValue('birthday','1999-05-21');

        $query -> execute();
}catch(PDOExeption $Exception){
        die('接続に失敗しました;'.$Exeption -> getMessage());
}

$pdo_object = null;

?>
