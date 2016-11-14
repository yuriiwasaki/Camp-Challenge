<?php
try{
        $pdo_object = new PDO('mysql: host=localhost;dbname=Challenge_db;charset=utf8','yuri','yuri1988');
        $sql = "SELECT * FROM profiles WHERE name LIKE '%実%' ";

        $query = $pdo_object -> prepare($sql);

        $query -> execute();

        $result = $query -> fetchall(PDO::FETCH_ASSOC);

    }catch(PDOExeption $Exception){
        die('接続に失敗しました;'.$Exeption -> getMessage());
    }

$pdo_object = null;

        foreach ($result as $key => $value) {
            echo '<br>';
        foreach ($value as $key => $value2) {
            echo $key,$value2.'<br>';
        }
        }
?>
