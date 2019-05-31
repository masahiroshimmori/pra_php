<pre>
<?php

//任意長整数

//足し算
$i = PHP_INT_MAX +1;
var_dump($i);//型がfloatになってしまう
$r = bcadd(PHP_INT_MAX, '1', 0);
var_dump($r);//型がstring型になるので１の位がブレることがなくなる！


//引き算
$i = (PHP_INT_MAX * -1) - 2;
var_dump($i);//型がfloatになってしまう
$r = bcsub((string)(PHP_INT_MAX * -1), '2', 0);
var_dump($r);//型がstring型になるので１の位がブレることがなくなる！