
<?php
    /*$day1 = strtotime('2015-1-1');
    $day2 = strtotime('2015−12-31'); //19700101からのグリニッジ標準時刻の秒数 に対して、もう一回組込み関数を入れないといけない

    echo ($day2 - $day1) / (60 * 60 * 24).'<br>';

    $day1 = new Datetime(2015-1-1);
    $day2 = new Datetime(2015-12-31);

    $interval = $day1 -> diff($day2);
    echo $interval->format('%a').'<br>'; Datetimeまた今度復習*/


    $stamp1 = mktime(00,00,01,01,2015).'<br>';
    echo $stamp1.'<br>';
    $stamp2 = mktime(59,23,31,12,2015).'<br>';
    echo $stamp2.'<br>';

    $stamp3 = ($stamp2 - $stamp1);
    echo $stamp3;

/*$sum1 != $diff1
    $diff1 = strtotime("2015-01-01 00:00:00") != strtotime("2015-12-31 23:59:59"){
        echo $diff1;
    };*/


// ４．2015年1月1日 0時0分0秒と2015年12月31日 23時59分59秒の差（総秒）を表示してください。2のスタンプをまず作るmktimeのみ ２つ引く
//$sum1 != $diff1
//     $diff1= strtotime("2015-10-01 12:20:33") != strtotime("2015-11-01 23:08:33"){
//         echo $diff1;
//     }


?>
