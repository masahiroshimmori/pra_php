<pre>
<?php

function comparison($a,$b){
    if($a == $b){
    var_dump($a);
    print '  equal ';
    var_dump($b);
    print "\n";
    }
}

comparison('a2', 0);//string(2) "a2"  equal int(0)
comparison('2a', 2);//string(2) "2a"  equal int(2)
comparison('22a', 22);//string(3) "22a"  equal int(22)
comparison('022a', 22);//string(4) "022a"  equal int(22)
comparison('-22a', -22);//string(4) "-22a"  equal int(-22)
comparison(' 2a', 2);//string(3) " 2a"  equal int(2)
comparison("\t2a", 2);//string(3) "	2a"  equal int(2)
comparison("\n2a", 2);//string(3) "(ここに改行)2a"  equal int(2)
comparison("0x10", 16);//string(4) "0x10"  equal int(16)
comparison("2e2", 200);//string(3) "2e2"  equal int(200)