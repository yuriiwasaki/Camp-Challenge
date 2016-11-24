<?php

//DBへの接続を行う。成功ならPDOオブジェクトを、失敗なら中断、メッセージの表示を行う
function connect2MySQL(){

        $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8',DB_USER,DB_PASSWORD);
        //SQL実行時のエラーをtry-catchで取得できるように設定
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
}

//レコードの挿入を行う。失敗した場合はエラー文を返却する
function insert_profiles($name, $birthday, $type, $tell, $comment){
    //db接続を確立
    //各関数の$insert_db = connect2MySQL();をtry{}catch(PDOException $e){return $e->getMessage();} でエラーハンドリング
    try{$insert_db = connect2MySQL();

    }catch(PDOException $e){

    return $e->getMessage();
    }

    //DBに全項目のある1レコードを登録するSQL
    $insert_sql = "INSERT INTO user_t(name,birthday,tell,type,comment,newdate)"
            . "VALUES(:name,:birthday,:tell,:type,:comment,:newDate)";

    //現在時をdatetime型で取得
    $datetime =new DateTime();
    $date = $datetime->format('Y-m-d H:i:s');

    //クエリとして用意
    $insert_query = $insert_db->prepare($insert_sql);

    //SQL文にセッションから受け取った値＆現在時をバインド
    $insert_query->bindValue(':name',$name);
    $insert_query->bindValue(':birthday',$birthday);
    $insert_query->bindValue(':tell',$tell);
    $insert_query->bindValue(':type',$type);
    $insert_query->bindValue(':comment',$comment);
    $insert_query->bindValue(':newDate',$date);

    //SQLを実行
    try{
        $insert_query->execute();
    } catch (PDOException $e) {
        //接続オブジェクトを初期化することでDB接続を切断
        $insert_db=null;
        return $e->getMessage();
    }

    $insert_db=null;
    return null;
}

function search_all_profiles(){
    //db接続を確立
    try{
        $search_db = connect2MySQL();
    }catch(PDOException $e){
        return $e->getMessage();
    }


    $search_sql = "SELECT * FROM user_t";

    //クエリとして用意
    $search_query = $search_db->prepare($search_sql);

    //SQLを実行
    try{
        $search_query->execute();
    } catch (PDOException $e) {
        $search_query=null;
        return $e->getMessage();
    }

    //全レコードを連想配列として返却
    return $search_query->fetchAll(PDO::FETCH_ASSOC);
} //seatch_query をsearch_queryに変更

/**
 * 複合条件検索を行う
 * @param type $name
 * @param type $year
 * @param type $type
 * @return type
 */
function search_profiles($name=null,$year=null,$type=null){
    //db接続を確立
    try{    $search_db = connect2MySQL();

    }catch(PDOException $e){
        return $e->getMessage();
    }


    $search_sql = "SELECT * FROM user_t";
    $flag = false;
    if(!empty($name)){
        $search_sql .= " WHERE name like :name";
        $flag = true;
    }
    if(!empty($year) && $flag == false){
        $search_sql .= " WHERE birthday like :year";
        $flag = true;
    }else if(!empty($year)){
        $search_sql .= " AND birthday like :year";
    }
    if(!empty($type) && $flag == false){
        $search_sql .= " WHERE type = :type";
    }else if(!empty($type)){
        $search_sql .= " AND type = :type";
    }

    //クエリとして用意
    $search_query = $search_db->prepare($search_sql);
    if(!empty($name)){
    $search_query->bindValue(':name','%'.$name.'%');
    }
    if(!empty($year)){
    $search_query->bindValue(':year','%'.$year.'%');
    }
    if(!empty($type)){
    $search_query->bindValue(':type',$type);
    }
    //SQLを実行
    try{
        $search_query->execute();
    } catch (PDOException $e) {
        $search_query=null;
        return $e->getMessage();
    }

    //該当するレコードを連想配列として返却
    return $search_query->fetchAll(PDO::FETCH_ASSOC);
}



function profile_detail($id){
    //SQLに接続
    try{$detail_db = connect2MySQL();

    }catch(PDOException $e){
        return $e->getMessage();
    }

    $detail_sql = "SELECT * FROM user_t WHERE  userID=:id";
    //WHERE以下のSQL文の間違いを修正

    //クエリとして用意
    $detail_query = $detail_db->prepare($detail_sql);

    $detail_query->bindValue(':id',$id);

    //SQLを実行
    try{
        $detail_query->execute();
    } catch (PDOException $e) {
        $detail_query=null;
        return $e->getMessage();
    }

    //レコードを連想配列として返却
    return $detail_query->fetchAll(PDO::FETCH_ASSOC);
}

function update_profile($id,$name,$birthday,$tell,$type,$comment){
    //db接続を確立
    try{$update_Result_db = connect2MySQL();

    }catch(PDOException $e){
        return $e->getMessage();
    }
    //現在時をdatetime型で取得
    $datetime =new DateTime();
    $date = $datetime->format('Y-m-d H:i:s');

    $update_Result_sql = "UPDATE user_t SET name=:name,birthday=:birthday,tell=:tell,type=:type,comment=:comment,newdate=:newdate WHERE userID=:id";

    //クエリとして用意
    $update_Result_query = $update_Result_db->prepare($update_Result_sql);

    $update_Result_query->bindValue(':id',$id);
    $update_Result_query->bindValue(':name',$name);
    $update_Result_query->bindValue(':birthday',$birthday);
    $update_Result_query->bindValue(':tell',$tell);
    $update_Result_query->bindValue(':type',$type);
    $update_Result_query->bindValue(':comment',$comment);
    $update_Result_query->bindValue(':newdate',$date);

    //sqlを実行
    try{
        $update_Result_query->execute();
    }catch(PDOException $e){
        $update_Result_query=null;
        return $e->getMessage();
    }
    return null;
}

function delete_profile($id){
    //db接続を確立
    try{
        $delete_db = connect2MySQL();
    }catch(DBOException $e){
        return $e->getMessage();
    }


    $delete_sql = "DELETE FROM user_t WHERE userID=:id";
    //SQL文内の＊を削除

    //クエリとして用意
    $delete_query = $delete_db->prepare($delete_sql);

    $delete_query->bindValue(':id',$id);

    //SQLを実行
    try{
        $delete_query->execute();
    } catch (PDOException $e) {
        $delete_query=null;
        return $e->getMessage();
    }
    return null;
}
