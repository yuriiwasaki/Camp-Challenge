<?php

try{
        $pdo_object = new PDO('mysql: host=localhost;dbname=Challenge_db;charset=utf8','yuri','yuri1988');

        $sql = "DELETE  FROM profiles WHERE name='田中実'";//まずtableのカラムの中の一つの情報を削除
        $query = $pdo_object -> prepare($sql);//sqlに用意

        $query -> execute();//ターミナル上でenterを押すのと同じ

        $sql = "SELECT * FROM profiles";//まずtableのカラムの中の一つの情報を削除した後のtableを選択
        $query = $pdo_object -> prepare($sql);//sqlに用意

        $query -> execute();//ターミナル上でenterを押すのと同じ

        $result = $query -> fetchall(PDO::FETCH_ASSOC);//tableのカラムの中の一つの情報を削除した後のtableをphpで読める形にする指示

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
