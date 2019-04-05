<pre>
<?php

$i = PHP_INT_MAX;//定数
var_dump($i);
$i ++;
var_dump($i); //型がintだったものがfloatになる
echo "\n";
//
$i = PHP_INT_MAX * -1;
var_dump($i);
$i --;
var_dump($i);
$i --;
var_dump($i); //型がintだったものがfloatになる