<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>
            
        </title>
    </head>
    <body>
        <h1>PHP学習用テキスト</h1>
        <h2>XSS脆弱性のあるform</h2>
        <?php
        if(isset($_POST['name']) === true){
            print $_POST['name'].'さん、ようこそ！';//試すときはコメントアウト
        }
        ?>
        <br>
        <form method="post" action="./23-4htmlspecialchars.php">
            <input type="text" name="name"><br>
            <br>
            <input type="submit" value="確認する">
        </form>
    </body>
</html>