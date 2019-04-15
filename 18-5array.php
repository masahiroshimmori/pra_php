<pre>
<?php

$awk = array(1,2,3);

//keyで後ろに追加
$awk[count($awk)] = 4;
var_dump($awk);

//または
$awk[] = 5;
var_dump($awk);

//ハッシュ配列
$awk['test'] = 100;
var_dump($awk);

//keyの削除
unset($awk[0]);
var_dump($awk);