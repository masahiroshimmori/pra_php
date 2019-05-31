<?php


//$_FILES['userfile']['name']と$_FILES['userfile']['type']は信頼しないこと
//（自己申告のため、悪意のある人は画像にスクリプトを埋めたりするので）
//$uploadfile = $_FILES['userfile']['name']←だめ！
//$uploadfile = date(Ymd).'/'.$_FILES['userfile']['name']←これもだめ
//ちなみに['userfile']はinput nameの値を指している。


//これを使おう↓※マイクロ秒を含む現在時刻でファイル名を決める
$uploadfile = (string)microtime(true).'.xxx';//ファイル名を決めておく
var_dump($uploadfile);

//このファイルはアップロードされたファイルかどうかチェック
if(false === is_uploaded_file($_FILES['userfile']['tmp_name'])){
  //HTTP POSTでアップロードされたファイルではない
  exit;
}
//ファイルをディレクトリに移動
if(false === move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile)){
  //うまく移動できなかった
  return;
}

//ここまできたらうまくいった！
