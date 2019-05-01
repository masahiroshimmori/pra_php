<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>
            
        </title>
    </head>
    <body>
        <h1>PHP学習用テキスト</h1>
        <h2>XSS脆弱性を対策したform</h2>
        <?php
        if(isset($_POST['name']) === true){
            print htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8').'さん、ようこそ！';//試すときはコメントアウト
        }
        ?>
        <br>
        <form method="post" action="./23-5htmlspecialchars.php">
            <input type="text" name="name"><br>
            <br>
            <input type="submit" value="確認する">
        </form>
    </body>
</html>