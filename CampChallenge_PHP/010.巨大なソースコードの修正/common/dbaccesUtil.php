<?php

// ----- 6.insert_result.phpにて、SQLを実行した際に現在時刻が正しい型で格納されない。これを修正しなさい ----
date_default_timezone_set('Asia/Tokyo');

function insert_db($name,$birthday,$tell,$type,$comment){
    //db接続を確立
    $insert_db = connect2MySQL();

    //DBに全項目のある1レコードを登録するSQL
    $insert_sql = "INSERT INTO user_t(name,birthday,tell,type,comment,newDate)"
            . "VALUES(:name,:birthday,:tell,:type,:comment,:newDate)";

    //クエリとして用意
    $insert_query = $insert_db->prepare($insert_sql);

    //SQL文にセッションから受け取った値＆現在時をバインド
    $insert_query->bindValue(':name',$name);
    $insert_query->bindValue(':birthday',$birthday);
    $insert_query->bindValue(':tell',$tell);
    $insert_query->bindValue(':type',(int)$type, PDO::PARAM_INT);
    $insert_query->bindValue(':comment',$comment);
    $current_time = date('Y-m-d H:i:s',mktime());

    $insert_query->bindValue(':newDate',$current_time);

    try{
    //SQLを実行
    $insert_query->execute();
    }catch(PDOException $error){
    $insert_db=null;
    return $error ->getMessage(); //失敗した時はDB接続を切ってエラーを返す
    }

    //接続オブジェクトを初期化することでDB接続を切断
    $insert_db=null;

}


//DBへの接続用を行う。成功ならPDOオブジェクトを、失敗なら中断、メッセージの表示を行う
function connect2MySQL(){
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','yuri','yuri1988', array(
            PDO::ATTR_EMULATE_PREPARES => false
            //db側でバインド、静的プレースホルダー
            /*-----insert_result.phpにて、SQLを実行した結果正しくデータが格納できたのかどうかを判定していない。これを判定し、「データの挿入に失敗しました:[SQLのエラー文]」となるように修正しなさい。（ヒント:new PDO()を行う時点から工夫する必要がある。シチュエーション:デフォルトでPHPとしてのエラーは吐かれるが、その後の処理が中止されてしまうので、もしその後に「トップへ戻る」などのリンクを吐く処理を記述していた場合実行されなくなってしまう)------*/
        ));

    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die('接続に失敗しました。次記のエラーにより処理を中断します:'.$e->getMessage());
    }
}
