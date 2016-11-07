
<?php
    // アップロードされたファイルの情報を確認
    var_dump($_FILES);
    // サーバー側に保存する名前
    $file_name = 'upload.txt';
    // アップロードされたファイルを移動する $_FILES [サーバに保存][一時保存のファイル][保存ファイル名]
    move_uploaded_file($_FILES['userfile']['tmp_name'], $file_name);


//５．ファイルアップロード機能を作成してください。kiso5.htmlでフォーム作成
//６．５で作成したプログラムに、ファイルの中身を読み込んで表示する機能を追加してください。

//実行するとエラー 解消済
//Warning: move_uploaded_file(upload.txt): failed to open stream: Permission denied in /Applications/XAMPP/xamppfiles/htdocs/challenge/CampChallenge_PHP/005.PHPでのデータ操作/kiso6.php on line 8

//move_uploaded_file(): Unable to move '/Applications/XAMPP/xamppfiles/temp/phpPJ1BJD' to 'upload.txt' on line 8
?>
