<pre>
<?php

$s1 = 'test';
$s2 = 'test';
$s3 = 'testhoge';
$s4 = 'TEST';
$s5 = 'TESTHOGE';

print "strcmp\n";
//正しい場合は０が帰ってくる。違う場合はそれ以外が帰ってくる。
var_dump( strcmp($s1, $s2) );//int(0)
var_dump( strcmp($s1, $s3) );//int(4)
var_dump( strcmp($s1, $s4) );//int(32)
//
echo "\n";
echo "strncmp\n";//0番目からn番目までの一致
var_dump( strncmp($s1, $s2, 4) );//int(0)
var_dump( strncmp($s1, $s3, 4) );//int(0)
//
echo "\n";
echo "strcasecmp\n";//大文字と小文字を区別しない
var_dump( strcasecmp($s1, $s4) );//int(0)
//
echo "\n";
echo "strncasecmp\n";
var_dump( strncasecmp($s1, $s4, 4) );//int(0)
var_dump( strncasecmp($s1, $s5, 4) );//int(0)