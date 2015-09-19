<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ログイン</title>
        <link rel="stylesheet" href="../css/default.css">
    </head>
    <body>
        <div id="container">
            
            <h2>IDとパスワードを入力ください</h2>
            <form action="login_execute.php" method="post">
                <table border="0" id="login_g">
                    <tr height="50">
                        <td width="100">ログイン名: </td>
                        <td><input type="text" name="name" value="" size="80" required /></td>
                    </tr>
                    <tr height="50">
                        <td>パスワード: </td>
                        <td><input type="password" name="password" size="80" value="" required /></td>
                    </tr>
                    <tr height="50">
                        <td><input type="submit" name="next-b"/></td>
                        <td><input type="submit" value="元に戻る" name="cancel-b"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>