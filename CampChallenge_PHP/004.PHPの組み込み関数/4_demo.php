<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>demo4-demo</title>
</head>
<body>
    <?php
    //6つの変数が初期化
    $waganeko_texts = array(); //配列に入る 配列に入れることで改行で表示させる？
    $read_line = 21; //21行
    $count = 0; //初期化
    $figure = '猫';//置き換える対象の文字
    $exchange_figure = '犬';//置換したい文字
    $changed_text = array(); //変えた後のテキストの配列

    $waganeko_fp = fopen('4_waganeko.txt','r');//読み取りモードでファイルを開く

    for($i=0;$i<$read_line;++$i){
        $waganeko_texts[$i]=fgets($waganeko_fp);
        $count += mb_strlen($waganeko_texts[$i]);
    }
    /*
    $read_lineの値まで$aに1プラスする形で以下の処理を繰り返す
    配列の$waganeko_texts の中に$iを入れたものに、fgetsで取得した$waganeko_fpの値を代入し、
    $countに$count+mb_strlen($waganeko_texts[$i]);の値を入れる
    */
    echo $read_line.'行目までの文字数は'.$count.'です<br>';
    echo 'そのうち、「'.$figure.'」という文字は'.figure_count($waganeko_texts).'個含まれています<br>';
    echo '<br>これを「'.$exchange_figure.'」という文字に置き換えると...<br>';
    /*
    数字部分は全て変数の値
    表示
    表示
    表示
    */

    $changed_text = waganeko_exchange($waganeko_texts,$exchange_figure);

    foreach ($changed_text as $key => $changed_line){
        echo ($key+1).'行目:';    //表示
        echo $changed_line.'<br>';

    }
    /*$chenged_text にwaganeko_exchange($waganeko_texts,$exchange_figure)代入;
    foreach文  $changed_textの中の＄key には$changed_lineが入っているとき
    表示 $keyの値に+1 文字列’行目’
    表示 $changed_lineの値 改行
    */
    echo '<br>という表現になります<br>';
    //人間のために表示


    function figure_count($texts){
        global $figure;
        $figcnt = 0;

        foreach ($texts as $text_line){
            $figcnt += mb_substr_count($text_line, $figure);
        }

        return $figcnt;
    }
    /*関数 figure_countを作った（引数には$texts）
    $figcnt に $figcnt + mb_substr_count($text_line, $figure); の結果を代入
    戻り値として $figcnt（値、$figureの回数）を返す
    */
    function waganeko_exchange($texts,$exfig){
        global $figure; //$figureはユーザー定義関数の範囲内で直接呼び出して使うことができない
        $ex_texts = array();

        foreach ($texts as $line_num => $text_line){
            $ex_texts[$line_num] = str_replace($figure, $exfig, $text_line);
        }

        return $ex_texts;
    }
    /*置換,$textsに入れられている配列の $text_lineに以下の処理
    配列$ex_textsの$line_num に 文字置換の結果を代入、str_replace($figure, $exfig, $text_line);
    戻り値として $ex_textsを返す
    */

    ?>
</body>
</html>
