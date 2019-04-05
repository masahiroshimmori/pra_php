<pre>
<?php
function empty_check($v) {
  var_dump($v);
  echo " is ";
  var_dump(empty($v));
  echo "\n";
}
//
empty_check(true);//false
empty_check(false);//true
//
empty_check(0);//true
empty_check(0.0);//true
empty_check(1);//false
empty_check(-1);//false
//
empty_check('');//true
empty_check(' ');//false
empty_check("\n");//false
empty_check('0'); // XXX 注意すべきところ true
empty_check('0.0');//false
empty_check('00');//false
//
empty_check(array());//true
empty_check(array(1));//false
//
empty_check(fopen(__FILE__, "r"));//false
//
empty_check(null);//true
//
empty_check(new stdClass());//false