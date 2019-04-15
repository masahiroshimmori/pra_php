<pre>
<?php

class クラス名 {
    public function メソッド(){
        print "call メソッド()\n";
    }
    public static function 静的メソッド(){
        print "call 静的メソッド()\n";
    }
    
    //クラス変数
    //private $プロパティ;
    public $プロパティ;
}

$インスタンス = new クラス名();
$インスタンス->プロパティ = 'test';//値を代入(publicだと入るけどprivateは入らない)
var_dump($インスタンス);

$インスタンス->メソッド();

クラス名::静的メソッド();

/*結果
object(クラス名)#1 (1) {
  ["プロパティ"]=>
  string(4) "test"
}
call メソッド()
call 静的メソッド()
*/