<pre>
    
<?php
//trimはホワイトスペース（タブ。スペース。改行）を除去する
print "trim\n";
$s = " \t test\n";
var_dump($s);
$s2 = trim($s);
var_dump($s2);

//区切り
print "\n\n";

print "strtoupper, strtolower, ucfirst, ucwords\n";
$s = 'All in the golden afternoon Full leisurely we glide;';
var_dump($s);
//全て大文字へ変換
$s2 = strtoupper($s);
var_dump($s2);
//全て小文字へ変換
$s2 = strtolower($s);
var_dump($s2);
//最初の文字だけ大文字
$s2 = ucfirst($s);
var_dump($s2);
//単語ごと（区切り）で先頭文字を大文字へ
$s2 = ucwords($s);
var_dump($s2);

//区切り
print "\n\n";

//substr
print "substr\n";

//０−１０文字で区切る
$s2 = substr($s,0,10);
var_dump($s2);
//１０番目から最後まで
$s2 = substr($s,10);
var_dump($s2);
//[後ろから数えて１０番目]から最後まで
$s2 = substr($s,-10);
var_dump($s2);
//[後ろから数えて１０番目]から３文字
$s2 = substr($s,-10,3);
var_dump($s2);
//[後ろから数えて１０番目]から[後ろから数えて３番目]まで
$s2 = substr($s,-10,-3);
var_dump($s2);

//区切り
print "\n\n";

//str_replace
print "str_replace\n";

$s2 = str_replace('afternoon', 'evening', $s);
var_dump($s2);

$s2 = str_replace(array('afternoon','golden'),array('evening', 'silber'), $s);
var_dump($s2);