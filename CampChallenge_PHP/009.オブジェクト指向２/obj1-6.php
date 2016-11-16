<?php
abstract class base{

    abstract protected function load();
    abstract public function show();

}
// //３．baseという抽象クラスを作成し、以下を実装してください。
// ・loadというprotectedな関数を用意してください。
// ・showという公開関数を用意してください。
class Human extends base {

    private $table = "";
    function __construct($a){
        $this -> table = $a;
    }
    private $result = null;

    function load(){
        try{$pdo_object= new PDO("mysql:host=localhost;dbname=challenge_db;charset=utf8",'yuri','yuri1988');

        }catch(PDOExeption $Exception){
            die('接続に失敗しました:'.$Exception -> getMessage());
        } //DBへ接続
        $sql ="SELECT * FROM $this->table";
        $query =$pdo_object -> prepare($sql);
        $query ->execute();//実行

        $this -> result = $query ->fetchall(PDO::FETCH_ASSOC);

        $pdo_object = null;

    }
    public function show(){


        foreach ($this -> result as $key => $value) {
            echo '<br>';
        foreach ($value as $key => $value2) {
            echo $key,$value2.'<br>';
        }
        }

    }

}
class station extends base{

    private $table ="";//隠匿変数
    function __construct($b){//初期化処理
        $this -> table =$b;
    }

    function load(){//絶対用意する関数

        try{$pdo_object= new PDO("mysql:host=localhost;dbname=challenge_db;charset=utf8",'yuri','yuri1988');

        }catch(PDOExeption $Exception){
            die('接続に失敗しました:'.$Exception -> getMessage());
        } //DBへ接続
        $sql ="SELECT * FROM $this->table";
        $query =$pdo_object->prepare($sql);
        $query ->execute();//実行
        $result =$query->fetchall(PDO::FETCH_ASSOC);

        $pdo_object = null;

    }
    public function show(){
        foreach ($this -> result as $key => $value) {
            echo '<br>';
        foreach ($value as $key => $value2) {
            echo $key,$value2.'<br>';
        }
        }
    }

}

// ４．３で作成した抽象クラスを継承して、以下のクラスを作成してください。
// ・人の情報を扱うHumanクラス
// ・駅の情報を扱うStationクラス
// また、各クラスに隠匿変数でtableという変数を用意し、各クラスの初期化処理で
// table変数にテーブル名を設定してください。

$a=new Human('human');
$a -> load();
$a -> show();

$b=new Human('station');
$b -> load();
$b -> show();

// ５．load関数でDBから全情報を取得するように各クラスの関数を実装してください。
// その際、table変数を利用して、データを取得するようにしてください。
// ６．show関数で各テーブルの情報の一覧が表示されるようにしてください。
?>
