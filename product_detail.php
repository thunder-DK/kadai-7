<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta data="description" content="">
        <meta data="keywords" content="">
        <link rel="stylesheet" style="css/text" href="css/default.css">
        <title>素敵な家具を売っています</title>
        <!--
        <script type="text/javascript">
            $(document).ready(function(){
            //この中に処理を記述 開始

                //購入ボタン クリックイベント
                $("#purchase-btn").on("click",function(){
                    var value=$("#text-count").val();
                    localStorage.setItem("purchase-count",value);
                    alert("カートに入れました");
                });
            });
        </script>
        -->
    </head>

    <body class="hyouji-area">

        <p><a href="index.php">元に戻る</a></p>

        <?php
            $get_id = $_GET["id"];

            $pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
            $sql = "SELECT * FROM ec_sample WHERE id = $get_id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($results as $row) {
                $gazo_path = $row["gazo"];
                $maker = $row["maker_name"];
                $product_name = $row["product_name"];
                $product_cost = $row["product_cost"];
                $product_detail = $row["product_char"];
            }
            $pdo = null;
        
            $product_gazo = "<div class='kagu-detail'><img src=" .$gazo_path. "></div>";
            print $product_gazo;

            /*
            session_start();
            $_SESSION["id"] = $get_id;
            */

        ?>

        <form action="personal.php" method="get">
            <dl class="spec-info">
                <dt><b>メーカー：</b></dt><dd><?php print $maker ?></dd>
                <dt><b>商品名：</b></dt><dd><?php print $product_name ?></dd>
                <dt><b>金額：</b></dt><dd><?php print $product_cost."円" ?></dd>
                <dt><b>商品特徴：</b></dt><dd><?php print $product_detail ?></dd>
                <dt><b>数量（個）：</b></dt>
                <dd>
                    <input type="text" id="text-count" name="conv-count" value="1" size="5" maxlength="4">
                </dd>
                <dt>　</dt><dd></dd>
                    <input type="hidden" name="get_id" value=<?php print $get_id ?>>
                <dt>
                    <input type="submit" value="購入する">
                </dt>
            </dl>
        </form>
    </body>
</html>



