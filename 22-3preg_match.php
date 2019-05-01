<pre>
<?php

/*
縦線[|]は or のことで、いずれかの意味
括弧を使って一括りにするといいが、なくても動く
 */

$string = '0123456789abcdefghijk';
$ret = preg_match('/(abc)|(456)|(ABC)/', $string, $matches);
var_dump($ret);
var_dump($matches);