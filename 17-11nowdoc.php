<pre>
<?php
$i = 100;
//ダブルクォートで囲ったのと一緒
$string = <<<EOD
ヒアドキュメント用の文字列です。
\tや\n、{$i}なども書いてみましょう。
EOD;
var_dump($string);
//シングルクォートで囲ったのと一緒
$string = <<<'EOD'
ヒアドキュメント(NowDoc)用の文字列です。
\tや\n、{$i}なども書いてみましょう。
EOD;
var_dump($string);
