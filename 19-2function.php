<?php

ini_set('display_errors','on');
error_reporting(E_ALL);

function hoge(){
}

//PHPでは関数名は大文字と小文字の区別をしないため二重定義に注意
function Hoge(){
    
}