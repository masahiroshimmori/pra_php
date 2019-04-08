<pre>
<?php
//
$i = 65;
$f = 1.23456789;
$s = 'abc';
// 桁あわせ
printf("%6d\n", $i);//    65
// 0パディング
printf("%06d\n", $i);//000065
// 符号付
printf("%+d\n", $i);//+65
// 小数点
printf("%f\n", $f);//1.234568
// 精度指定小数点
printf("%.4f\n", $f);//1.2346
// 文字列
printf("%s\n", $s);//abc
// １文字(数値をASCIIコードとして変換)
printf("%c\n", $i);//A
// 文字幅指定
printf("%16s\n", $s);//             abc
printf("%016s\n", $s);//0000000000000abc