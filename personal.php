<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta data="description" content="">
        <meta data="keywords" content="">
        <title>素敵な家具を売っています ｜ 購入用ページ</title>
        <link rel="stylesheet" type="text/css" href="css/default.css">
        <script src="js/jquery-2.1.3.min.js"></script>
    </head>
    
    <body class="hyouji-area">
        <?php
            session_start();
            $get_id = $_SESSION["id"];
            session_destroy();

            $pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
            $sql = "SELECT gazo FROM ec_sample WHERE id = $get_id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($results as $row) {
                $gazo_path = $row["gazo"];
            }
            $pdo = null;
            $get_val = $_GET["conv-count"];
        ?>

        <p style="margin-left: 20%;">カートに入れている商品はコチラ</p>
        <p style="margin-left: 20%;" class="kagu-purchase">
            <img src= <?php print $gazo_path?>></p>
        <div><b>数量（個）：</b><input type="text" id="text-count1" value="<?php print $get_val ?>" size="5" disabled></div>
    
        <p>
            <button type="button" id="cancel-btn" onclick="location.href='product_detail.php?id=<?php print $get_id ?>'"><big>キャンセルする</big></button>
        </p>
        
  
        <div id="input-form" width="600" style="float:left;">
            <form action="purchase.php" method="post">
                <p style="margin-left: 50%;"><b>＜購入される方はコチラ＞</b></p>

                <p style="margin-left: 50%;">
                    氏名（性）：<input type="text" id="name1-1" name="name1-1" maxlength="20" size="20" required>
                </p>
                <p style="margin-left: 50%;">
                    氏名（名）：<input type="text" id="name1-2" name="name1-2" maxlength="20" size="20" required>
                </p>
                <p style="margin-left: 50%;">
                    郵便番号：<input type="text" id="ad-nbr1" name="ad-nbr1" maxlength="10" size="20" required>
                </p>
                <p style="margin-left: 50%;">住所（都道府県）：
                    <select name="" id="address1-1" name="address1-1" required>
                        <option>北海道</option>
                        <option>東京</option>
                        <option>広島</option>
                        <option>福岡</option>
                    </select>
                </p>
                <p style="margin-left: 50%;">
                    住所：<input type="text" id="address1-2" name="address1-2" maxlength="100" size="60" required>
                </p>    
                <p style="margin-left: 50%;">
                    E-mail：<input type="email" id="email" name="email" maxlength="50" size="40" required>
                </p>

                <div id="j-button">
                    <input type="submit" style="margin-left: 50%;" value="購入する" name="conv-b">
                    <input type="submit" value="クリアにする" name="clear-b">

                    <!--
                    <button type="button" style="margin-left: 50%;" id="pur-judge-btn" onclick="location.href='purchase.php'"><big>購入する</big></button>

                    <button type="button" id="clr-btn"  onclick="location.href='index.php'"><big>クリアにする</big></button>
                    -->
                </div>

            </form>
        </div>
    </body>
</html>