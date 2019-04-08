<pre>
<?php
//
$s = 'hoge';
$i = 100;
//
$v1 = 'abc';
$v2 = "abc";
var_dump($v1);//string(3)"abc"
var_dump($v2);//string(3)"abc"
//
$v1 = 'data is {$s}';
$v2 = "data is {$s}";
var_dump($v1);//string(12)"data is {$s}"
var_dump($v2);//string(12)"data is hoge"
//
$v1 = 'data is {$i}';
$v2 = "data is {$i}";
var_dump($v1);//string(12)"data is {$i}"
var_dump($v2);//srring(11)"data is 100"
//
$v1 = 'print " and \' ';
$v2 = "print \" and ' ";
var_dump($v1);//string(14)"print " and ' "
var_dump($v2);//string(14)"print " and ' "
//
$v1 = 'escape \n';
$v2 = "escape \n";
var_dump($v1);//string(9)"escape \n"
var_dump($v2);//string(8)"escape 
//"