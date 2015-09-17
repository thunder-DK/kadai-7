<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ログイン</title>
        <link rel="stylesheet" href="../css/default.css">
    </head>
    <body>
        <div id="container">
            <form action="login_execute.php" method="post">
                ログイン名: <input type="text" name="name" value="" required />
                パスワード: <input type="password" name="password" value="" required />
                <input type="submit" name="next-b"/>
                <input type="submit" value="元に戻る" name="cancel-b">
            </form>
        </div>
    </body>
</html>