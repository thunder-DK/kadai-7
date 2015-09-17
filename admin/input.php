<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>管理者用–ニュース登録用</title>
        <link rel="stylesheet" href="../css/default.css">
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
            
            <?php
            /*
                $pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
                $sql = "SELECT * FROM news ORDER BY news_id DESC";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                echo '<table border="1">';
                    echo '<tr>';
                        print '<td>' ."ID". '</td>';
                        print '<td>' ."newsタイトル". '</td>';
                        print '<td>' ."news詳細". '</td>';
                        print '<td>' ."著者". '</td>';
                        print '<td>' ."登録日". '</td>';
                        print '<td>' ."更新日". '</td>';
                    echo '</tr>';

                foreach($results as $row) {
                    echo '<tr>';
                        $news_id = $row["news_id"];
                        $news_date = substr($row["create_date"],0,10);
                        $news_update = substr($row["update_date"],0,10);
                        $news_title = $row["news_title"];
                        $news_detail = $row["news_detail"];
                        $news_author = $row["author"];

                        print '<td>' .$news_id. '</td>';
                        print '<td>' .$news_title. '</td>';
                        print '<td>' .$news_detail. '</td>';
                        print '<td>' .$news_author. '</td>';
                        print '<td>' .$news_date. '</td>';
                        print '<td>' .$news_update. '</td>';
                        print '<td><button>' ."更新". '</button><td><button>' ."削除". '</button></td>';
                    
                    // print "<a href=\"news.php?id=$news_id\">$cc_newstitle</a>";
                    // print "       ";
                    // print $row["update_date"];
                    // print "<br>";
                    echo '<tr>';
                
                }
                echo '</table>';

                $pdo = null;
                */
            ?>

        </div>
    </body>
</html>