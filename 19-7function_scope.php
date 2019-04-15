<pre>
<?php

function hoge(){
    $i = $i + 1;//ここで使っている$i（ローカル変数）は下のグローバル変数と何の関係もない！
    var_dump($i);
}

$i = 0;//この変数はグローバルスコープなのでこの場合は何の意味もない！
hoge();//null+1(0+1)になるため１が帰ってくる
hoge();//null+1(0+1)になるため１が帰ってくる（ローカル変数初期化されている）
var_dump($i);//グローバル変数$=0のこと

//ローカルスコープは関数やクラス内で使われる
//処理を抜けるたびに変数は初期化される！