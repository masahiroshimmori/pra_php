<pre>
<?php
/*
繰り返しを意味する「数量詞(または量指定子)」
また同様に「アスタリスク *」は特別な意味をもち「任意の０以上ｎ文字」となります。「０以上」という点に注意しましょう。
プラス＋で「１以上」、？で「０回または１回」、{}で回数指定となります。
＊及び？は「０以上」なので、\dないし\wで「先頭が英数ではない」ので、「０文字にマッチング」しているのでどちらも空文字になります。
*/
//
$string = '.?&%$0a01ab0123abc01234abcde012345abcdef';
//$string = '0a01ab0123abc01234abcde012345abcdef';
// アスタリスク
$ret = preg_match('/\d*/', $string, $matches);
var_dump($ret);
var_dump($matches);
// プラス
$ret = preg_match('/\w+/', $string, $matches);//最長一致
var_dump($ret);
var_dump($matches);
// ？
$ret = preg_match('/\w?/', $string, $matches);//最短一致
var_dump($ret);
var_dump($matches);
// {}
$ret = preg_match('/\w{2,3}/', $string, $matches);//2文字から3文字(可能な限り３文字に近いものを探してくる＊デフォルトが最長一致のため)
var_dump($ret);
var_dump($matches);