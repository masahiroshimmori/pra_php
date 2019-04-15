<pre>
<?php
//数字キーならarray_merge(配列を結合)
$awk = array(1,2,3);
$awk2 = array(4,5,6);

$awk3 = array_merge($awk, $awk2);
var_dump($awk3);