<pre>
<?php

//マッチする場合
$string = '0123456789abcdefghijk';
$ret = preg_match('/abc/', $string, $matches);
var_dump($ret);
var_dump($matches);

//マッチしないもの
$string = '0123456789ABCDEFGHIJK';
$ret = preg_match('/abc/', $string, $matches);
var_dump($ret);
var_dump($matches);