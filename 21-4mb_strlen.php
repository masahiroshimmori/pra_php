<pre>
<?php
// XXX PHP5.6.0 以降で(内部)エンコーディングがUTF-8なら以下を設定しておくと楽
//ini_set('default_charset', 'UTF-8');
//
echo "mb_strlen\n";
$s = 'あ';
echo strlen($s), "\n";//3  バイト数を表す
echo mb_strlen($s, 'UTF-8'), "\n";//1  文字数を表す
//echo mb_strlen($s), "\n";//文字コード省略版
echo mb_strwidth($s, 'UTF-8'), "\n";//2  文字の幅　全角は２　半角は１
//echo mb_strwidth($s), "\n";//文字コード省略版
// 区切り
echo "\n";
//
echo "mb_substr\n";
$s = 'あいうえお';
$s2 = substr($s, 2);//バイト換算　２バイト切るのでこの場合は「い」からになる
echo "{$s2}\n";
$s2 = mb_substr($s, 2, null, 'UTF-8');//文字数換算　この場合は「う」からになる
//$s2 = mb_substr($s, 2);//文字コード省略版
echo "{$s2}\n";
// 半角が混ざっても問題なく動く例
$s = 'あabcいうえお';
$s2 = mb_substr($s, 2, null, 'UTF-8');//「あ」と「a」が切り取りされる
//$s2 = mb_substr($s, 2);//文字コード省略版
echo "{$s2}\n";
// 区切り
echo "\n";
//
echo "mb_strpos\n";
$s = 'あabcいうえお';
$r = strpos($s, 'う');//9
echo "{$r}\n";
$r = mb_strpos($s, 'う', 0, 'UTF-8');//5  
//$r = mb_strpos($s, 'う');
echo "{$r}\n";
// 区切り
echo "\n";
//
echo "mb_strtolower, mb_strtoupper\n";
$s = 'abcABCａｂｃＡＢＣ';
$s2 = strtolower($s);//半角文字しか小文字にしない
//abcabcａｂｃＡＢＣ
echo "{$s2}\n";
$s2 = mb_strtolower($s, 'UTF-8');//全部小文字にする
//$s2 = mb_strtolower($s);
//abcabcａｂｃａｂｃ
echo "{$s2}\n";
$s2 = strtoupper($s);//半角しか大文字にしない
echo "{$s2}\n";
//ABCABCａｂｃＡＢＣ
$s2 = mb_strtoupper($s, 'UTF-8');//全て大文字にする
//$s2 = mb_strtoupper($s);
//ABCABCＡＢＣＡＢＣ
echo "{$s2}\n";