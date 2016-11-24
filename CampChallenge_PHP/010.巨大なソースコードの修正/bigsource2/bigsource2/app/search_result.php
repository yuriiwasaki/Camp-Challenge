<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';

if(!isset($_GET['type'])){
    $_GET['type']= "";
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>検索結果画面</title>
</head>
    <body>
        <h1>検索結果</h1>
        <table border=1>
            <tr>
                <th>名前</th>
                <th>生年</th>
                <th>種別</th>
                <th>登録日時</th>
            </tr>
        <?php
        $result = null;
        if(empty($_GET['name']) && empty($_GET['year']) && empty($_GET['type'])){
            $result = search_all_profiles();
        }else{
            $result = search_profiles($_GET['name'],$_GET['year'],$_GET['type']);
        }
        if(is_array($result)){
        foreach($result as $value){

        $param ="";

        if(isset($value['name'])){
            $param .= "&name=".$value['name'];
        }
        if(isset($value['birthday'])){
            $param .= "&birthday=".$value['birthday'];
        }
        if(isset($value['tell'])){
            $param .="&tell=".$value['tell'];
        }
        if(isset($value['type'])){
            $param .= "&type=".$value['type'];
        }
        if(isset($value['comment'])){
            $param .="&comment=" .$value['comment'];
        }
        if(isset($value['newdate'])){
            $param .= "&newdate=".$value['newdate'];
        }

        ?>
            <tr>
                <td><a href="<?php echo RESULT_DETAIL ?>?id=<?php echo $value['userID']. $param ;?>"><?php echo $value['name']; ?></a></td>
                <td><?php echo $value['birthday']; ?></td>
                <td><?php echo ex_typenum($value['type']); ?></td>
                <td><?php echo date('Y年n月j日 G時i分s秒', strtotime($value['newdate']));; ?></td>
            </tr>
        <?php
        }
    }else{
        echo $result;
    }
        ?>
        </table>

    <a href='http://localhost/bigsource2/app/search.php'input type="submit" name="btnSubmit" value="戻る" >検索画面へ戻る</a>
    <a href='http://localhost/bigsource2/app'input type="submit" name="btnSubmit" value="戻る" >トップへ戻る</a>
</body>
</html>
