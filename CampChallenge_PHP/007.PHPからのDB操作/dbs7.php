<?php
try{
        $pdo_object = new PDO('mysql: host=localhost;dbname=Challenge_db;charset=utf8','yuri','yuri1988');
        $sql = " UPDATE profiles SET name='松岡 修造',age=48,birthday='1967-11-06' WHERE profilesID=1 ";
        //profileID=1のnameを「松岡 修造」に、ageを48に、birthdayを1967-11-06に更新してください
        $query = $pdo_object -> prepare($sql);
        $query -> execute();

        $sql = "SELECT * FROM profiles";
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
