<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta data="description" contents="">
        <meta data="keywords" contents="">
        <title>おしゃれな家具を販売しています</title>
        <link rel="stylesheet" href="css/default.css" type="text/css" alt="">
    </head>
    
    <body>
        <div class="company-name" style="border-style:solid; border-width: 3px; padding:2px; width:400px">furniture Company ECショップ</div>
        
        <ul class="register">
            <li><a href="admin/logout.php">ログアウト</a></li>
            <li><a href="admin/login.php">ログイン</a></li>
            <li><a href="">会員登録</a></li>
        </ul>
            
        <p class="key-visual"><img src="images/backimg3.jpg"></p>
        
        <h2>あなたにオススメの家具</h2>

        <ul class="kagu-image">
            <?php
                $pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
                $sql = "SELECT id, gazo FROM ec_sample";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach($results as $row) {
                    $gazo_id = $row["id"];
                    $gazo_path = $row["gazo"];
                    $gazo_show = "<li><a href='product_detail.php?id=$gazo_id'><img src=" .$gazo_path. "></a></li>";
                    print $gazo_show;
                }
                $pdo = null;
            ?>
        </ul>
        
        <h3 align="center">最新ニュース</h3>
        
        <table border="0" id="news_show">
        <?php
            $pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
            $sql = "SELECT * FROM news WHERE show_fl=1 ORDER BY update_date DESC LIMIT 5";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($results as $row) {
                $news_title = $row["news_title"];
                $news_detail = $row["news_detail"];
                $news_update = substr($row["update_date"],0,10);
                
                
                echo "<tr>";
                    echo "<td width='120'>" .$news_update. "</td>";
                    echo "<td>" .$news_title. "</td>";
                    // echo "<td>" .$news_detail. "</td>";
                echo "</tr>";
            }
        ?>
        </table>

        <footer id="footerlogo">
            <p>copyright 2015 kuroda company</p>
        </footer>
    </body>
</html>