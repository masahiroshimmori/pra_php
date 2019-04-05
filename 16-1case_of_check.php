<?php

function bool_check($v){
    var_dump($v);
    echo "is";
    var_dump((bool)$v);
    echo "\n";
}

bool_check(true);//true
bool_check(false);//false

bool_check(0);//false
bool_check(0.0);//false
bool_check(1);//true
bool_check(-1);//true

bool_check('');//false
bool_check(' ');//true
bool_check("\n");//true
bool_check('0'); // XXX 注意すべきところ false
bool_check('0.0');//true
bool_check('00');//true

bool_check(array());//true
bool_check(array(1));//true

bool_check(fopen(__FILE__, "r"));//true

bool_check(null);//false

bool_check(new stdClass());//true