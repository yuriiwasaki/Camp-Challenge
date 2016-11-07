<?php

session_start();
    if(isset($_POST['txtName'])){

    $_SESSION['name'] =$_POST['txtName'];

    }
    if(isset($_POST['rdoSample'])){

    $_SESSION['gender'] =$_POST['rdoSample'];

    }
    if(isset($_POST['mulText'])){

    $_SESSION['hobby'] =$_POST['mulText'];

    }

    echo $_POST['txtName'].'<br>';
    echo $_POST['rdoSample'].'<br>';
    echo $_POST['mulText'].'<br>';



/*


名前・性別・趣味を入力するページを作成してください。
また、入力された名前・性別・趣味を記憶し、次にアクセスした際に
記録されたデータを初期値として表示してください。

session
html
本文
入力フォーム

$POSTを選択？
ログはなし、入力された情報の表示、どこに入れるのか？txtName chkTest multextの中。
表示に必要な情報は

入力された名前
3つの中から1つ選ばれた性別
趣味、テキストボックス3つ分まで （空の場合何もしない）


var_dump($_FILES);
// サーバー側に保存する名前
$file_name = 'upload.txt';
// アップロードされたファイルを移動する $_FILES [サーバに保存][一時保存のファイル][保存ファイル名]
move_uploaded_file($_FILES['userfile']['tmp_name'], $file_name);*/
