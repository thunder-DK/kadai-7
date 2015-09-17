<?php




?>

<!DOCTYPE html>
<html lang="ja">
    <head>
    </head>
    <body>
        <div id="container">
            <div class="company-name" align="center" style="border-style:solid; border-width: 3px; padding:2px; width:400px"><a href="../index.php">furniture Company ECショップ</a>
            </div>

            
            <div id="inputform">
                <h2>ニュースを登録してください</h2>
                <form action="input_execute.php" method="post">
                    <table>
                        <tr height="50">                        
                            <td>ニュースタイトル：</td>
                            <td><input type="text" name="n_title" size="100"></td>
                        </tr>
                        <tr>
                            <td>ニュース詳細：</td>
                            <td><textarea name="n_detail" rows="4" cols="100"></textarea></td>
                        </tr>
                        <tr>
                            <td>著者名：</td>
                            <td><input type="text" name="n_author" size="50"></td>
                        </tr>
                        <tr>
                            <td>表示設定</td>
                            <td><input type="radio" name="show_flg" value="1">表示
                                <input type="radio" name="show_flg" value="0">非表示
                            </td>
                        </tr>
                    </table>
                    <input type="submit" name="s_inputbutton" id="s_inputbutton" value="ニュース内容を登録する">
                </form>
            </div>
    </body>
</html>