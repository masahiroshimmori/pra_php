<pre>
<?php
/*
[^foo]bar という正規表現は、「fooではない文字列に続いてbarという文字列が続くもの」 ではありません。
[^foo]bar という正規表現は「fでもoでもoでもない１文字(なのでoが重複してる分はただの無駄)」
「に続いてbarの３文字」という意味合いになります。
 
今回の場合はbarの一文字前がfでもoでもoでもないという意味
*/
//
$string = 'abcfoobarhogebar';
$ret = preg_match('/[^foo]bar/', $string, $matches);
var_dump($ret);
var_dump($matches);

/*
int(1)
array(1) {
  [0]=>
  string(4) "ebar"
}
 */