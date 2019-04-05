<?php

$age = 20;
    if(20 > $age){
       print "未成年ですね<br>\n"; 
    }else{
        print "あなたは成人です<br>\n";
    }
    
    if(17 > $age){
        print "あなたはまだ選挙権がない未成年ですね<br>\n";
    }elseif(20 > $age){
        print "あなたは選挙権がある未成年ですね<br>\n";
    }else{
        print "あなたはもう成年ですね<br>\n";
    }
    
$gender = "male";
    if(20 <= $age){
        if('male' == $gender){
            print "あなたは成人男性ですね。<br>\n";
        }elseif('female' == $gender){
            print "あなたは成人女性ですね<br>\n";
        }
    }
    
    if(20 > $age):
            print "あなたはまだ未成年ですね<br>\n";
        else:
            print "あなたは成年ですね<br>\n";
    endif;
    
    if((20 <= $age) and ("male"==$gender)){
        print "あなたは成人男性ですね<br>\n";
    }
    
    if((20 > $age) or ("female"== $gender)){
        print "あなたは未成年かまたは女性ですね<br>\n";
    }