<!DOCTYPE html>
<html la="ja">
    <head>
        <meta charset="utf-8">
        <title>管理者用–ニュース登録内容確認</title>
    </head>
    
    <body>
        <div id="container">
            <div class="company-name" align="center" style="border-style:solid; border-width: 3px; padding:2px; width:400px"><a href="../index.php">furniture Company ECショップ</a></div>
            
            <?php
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
                        print '<td><button id="update-btn" onclick="location.href=update_execute.php?id='.$news_id.'">' ."更新". '</button><td><button id="delete-btn" onclick="location.href=delete_execute.php?id=' .$news_id. '">' ."削除". '</button></td>';
                    
                    // print "<a href=\"news.php?id=$news_id\">$cc_newstitle</a>";
                    // print "       ";
                    // print $row["update_date"];
                    // print "<br>";
                    echo '<tr>';
                
                }
                echo '</table>';

                $pdo = null;
            ?>

            <form action="input.php" method="post">
                <input type="submit" value="登録" name="submit-n">
            </form>
        </div>
    </body>
</html>