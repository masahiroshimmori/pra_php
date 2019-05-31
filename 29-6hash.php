<pre>
<?php

//扱えるハッシュの一覧
    var_dump(hash_algos());
    
//様々なハッシュ
    $base = "test";
    
    //現在は非推奨（脆弱性）
    echo 'md5:'.md5($base)."\n";
    //比較的安全
    echo 'sha-1:'.sha1($base)."\n";
    //もっと安全
    echo 'sha256:'.hash('sha256',$base)."\n";
