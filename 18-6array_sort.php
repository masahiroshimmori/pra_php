<pre>
<?php
//sortは値を昇降順にし、keyを捨てて0から振り直す
$awk = array(
  'c' => 2,
  'd' => 4,
  'a' => 1,
  'b' => 3,
);
sort($awk);
echo "sort\n";
var_dump($awk);

//rsortは値を降順にし、keyを捨てて0から振り直す
$awk = array(
  'c' => 2,
  'd' => 4,
  'a' => 1,
  'b' => 3,
);
rsort($awk);
echo "\nrsort\n";
var_dump($awk);

//asortは値を昇降順にし、keyはそのまま生きている
$awk = array(
  'c' => 2,
  'd' => 4,
  'a' => 1,
  'b' => 3,
);
asort($awk);
echo "\nasort\n";
var_dump($awk);

//asortは値を降順にし、keyはそのまま生きている
$awk = array(
  'c' => 2,
  'd' => 4,
  'a' => 1,
  'b' => 3,
);
arsort($awk);
echo "\narsort\n";
var_dump($awk);

//ksortはkeyを昇降順にする。（値はそのまま生きている）
$awk = array(
  'c' => 2,
  'd' => 4,
  'a' => 1,
  'b' => 3,
);
ksort($awk);
echo "\nksort\n";
var_dump($awk);

//krsortはkeyを降順にする。（値はそのまま生きている）
$awk = array(
  'c' => 2,
  'd' => 4,
  'a' => 1,
  'b' => 3,
);
krsort($awk);
echo "\nkrsort\n";
var_dump($awk);