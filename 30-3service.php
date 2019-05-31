<?php

ob_start();
session_start();

$post_csrf_token = (string)@$_POST['csrf_token'];
if(false === isset($_SESSION['csrf_token'][$post_csrf_token])){
    echo "CSRF token NG"; //実際には出力しない！
    return;
}

//寿命を把握して
$ttl = $_SESSION['csrf_token'][$post_csrf_token];
//使い捨てなので先にトークンは削除
unset($_SESSION['csrf_token'][$post_csrf_token]);

//寿命チェック(1分以内)
if(time() >= $ttl +60){
    echo 'CSRF トークンNG(寿命)';//実際には出力しない
    return;
}

//else
var_dump($_POST);
echo "正しいルートからの入力です。";