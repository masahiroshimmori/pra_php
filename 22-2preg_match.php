<pre>
<?php

//ここで「ドット」は特別な意味を持ち任意の位置1文字
//なんでもいいから1文字入っていること！の意
//aがあってなんか一文字あってcがあってなんか一文字となる。

$string = '0123456789abcdefghijk';
$ret = preg_match('/a.c./',$string, $matches);
var_dump($ret);
var_dump($matches);


//abcd