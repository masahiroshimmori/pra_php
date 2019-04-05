<pre>
    
<?php
//PHPでは＋結合は数字とみなされるし.結合は文字とみなされる

//int(200)
$v = 100 + 100;
var_dump($v);

//注意！int(200)
$v = '100' + '100';
var_dump($v);

//プラス結合なので数字と解釈し０（数字にできない場合は０を出す）となる
$v = 'abc' + 'def';
var_dump($v);

//string(100100)
$v = '100' . '100';
var_dump($v);

//string(abcdef)
$v = 'abc' . 'def';
var_dump($v);

//string(100100)
$v = 100 . 100;
var_dump($v);