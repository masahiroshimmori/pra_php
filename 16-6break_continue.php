<?php

for($i = 0; $i < 10; $i++){
    //2で割り切れる数なら処理をスキップ
    if(($i % 2) == 0){
        continue;
    }
    print $i."<br>\n";//奇数の出力
}

while(true){
    //0-9の間で乱数を発生させる
    $i = mt_rand(0, 9);
    
    //9が出たら終了
    if($i == 9){
        break;
    }
    print $i."<br>\n";
}

// 終了したことを告げる
echo "fin<br>\n";
