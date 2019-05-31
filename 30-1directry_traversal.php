<?php

//閲覧可能な全てのファイルを見られてしまう危険性があるので注意

// ファイル名を取得
$file_name = (string)@$_GET['fn'];
if ('' === $file_name) {
    echo 'ファイル名が指定されていません';
    return ;
}

// ファイルの情報を取得
$s = file_get_contents("./{$file_name}");

// ファイルの出力（ここを出力して下記urlにアクセスするとphp設定ファイルを見られてしまう！）：脆弱なコードなので出力はコメントアウト
//echo $s;

// クラック例
// http://localhost/30-1.php?fn=../php/php.ini
