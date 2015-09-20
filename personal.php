<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta data="description" content="">
        <meta data="keywords" content="">
        <title>素敵な家具を売っています ｜ 購入用ページ</title>
        <link rel="stylesheet" type="text/css" href="css/default.css">
    </head>
    
    <body>
    <!--<body class="hyouji-area">-->
        <div id="container">
            <?php
                $get_id = $_GET["get_id"];
                // $get_id = $_SESSION["id"];

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

                session_start();
                if (!isset($_SESSION["loginid"])){
                    $name1 = "";
                    $name2 = "";
                    $add1 = "";
                    $add2 = "";
                    $email = "";
                }else{

                    $get_loginid = $_SESSION["loginid"];
                    $get_loginpw = $_SESSION["loginpw"];

                    $pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
                    $sql = "SELECT * FROM ec_pi WHERE login_id = '$get_loginid' and login_pw = '$get_loginpw'";

                    $stmt = $pdo->prepare($sql);
                    $result = $stmt->execute();

                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($results as $row) {
                        $name1 = $row["name1"];
                        $name2 = $row["name2"];
                        $add1 = $row["address1"];
                        $add2 = $row["address2"];
                        $email = $row["email"];

                    }
                }
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
                    
                    <?php
                    /*
                        if($get_loginid == NULL){
                            echo '<p style="margin-left: 50%;">
                        氏名（性）：
                        <input type="text" id="name1-1" name="name1-1" maxlength="20" size="20" required value= '.<?php print $name1 ?>.'></p>';
                            echo '<p style="margin-left: 50%;">
                                氏名（名）：
                                <input type="text" id="name1-2" name="name1-2" maxlength="20" size="20" required value=<?php print $name2 ?>>';
                            echo '</p>';
                            echo '<p style="margin-left: 50%;">
                                郵便番号：
                                <input type="text" id="ad-nbr1" name="ad-nbr1" maxlength="10" size="20" required value=<?php print $add1 ?>>';
                            echo '</p>';
                            echo '<p style="margin-left: 50%;">
                                住所：
                                <input type="text" id="address1-2" name="address1-2" maxlength="100" size="60" required value=<?php print $add2 ?>>';
                            echo '</p>    
                            <p style="margin-left: 50%;">
                                E-mail：
                                <input type="email" id="email" name="email" maxlength="50" size="40" required value=<?php print $email ?>>';
                            echo '</p>';
                        }
                        else{    
                            echo '<p style="margin-left: 50%;">
                                氏名（性）：
                                <input type="text" id="name1-1" name="name1-1" maxlength="20" size="20" required>';
                            echo '</p>';
                            echo '<p style="margin-left: 50%;">
                                氏名（名）：
                                <input type="text" id="name1-2" name="name1-2" maxlength="20" size="20" required>';
                            echo '</p>';
                            echo '<p style="margin-left: 50%;">
                                郵便番号：
                                <input type="text" id="ad-nbr1" name="ad-nbr1" maxlength="10" size="20" required>';
                            echo '</p>';
                            echo '<p style="margin-left: 50%;">
                                住所：
                                <input type="text" id="address1-2" name="address1-2" maxlength="100" size="60" required>';
                            echo '</p>';    
                            echo '<p style="margin-left: 50%;">
                                E-mail：
                                <input type="email" id="email" name="email" maxlength="50" size="40" required>';
                            echo '</p>';
                        }
                        */
                    ?>
                
                    <p style="margin-left: 50%;">
                        氏名（性）：<input type="text" id="name1-1" name="name1-1" maxlength="20" size="20" required value= <?php print $name1 ?>>
                    </p>
                    <p style="margin-left: 50%;">
                        氏名（名）：<input type="text" id="name1-2" name="name1-2" maxlength="20" size="20" required value=<?php print $name2 ?>>
                    </p>
                    <p style="margin-left: 50%;">
                        郵便番号：<input type="text" id="ad-nbr1" name="ad-nbr1" maxlength="10" size="20" required value=<?php print $add1 ?>>
                    </p>

                    <!--
                    <p style="margin-left: 50%;">住所（都道府県）：
                        <select name="" id="address1-1" name="address1-1" required>
                            <option>北海道</option>
                            <option>東京</option>
                            <option>広島</option>
                            <option>福岡</option>
                        </select>
                    </p>
                    -->
                    
                    <p style="margin-left: 50%;">
                        住所：<input type="text" id="address1-2" name="address1-2" maxlength="100" size="60" required value=<?php print $add2 ?>>
                    </p>    
                    <p style="margin-left: 50%;">
                        E-mail：<input type="email" id="email" name="email" maxlength="50" size="40" required value=<?php print $email ?>>
                    </p>

                    <!--
                    <input type="image" src="images/btn-purchase.png" value="購入する" id="submit-input" name="conv-b"/>
                    <input type="image" src="images/btn-cancel.png" value="元に戻る" id="submit-cancel" name="clear-b">
                    -->

                    <div id="j-button">
                        <input type="submit" style="margin-left: 50%;" value="購入する" name="conv-b">
                        <input type="submit" value="クリアにする" name="clear-b">
                    </div>
                        
                    <!--
                        <button type="button" style="margin-left: 50%;" id="pur-judge-btn" onclick="location.href='purchase.php'">
                        <big>購入する</big></button>

                        <button type="button" id="clr-btn"  onclick="location.href='index.php'"><big>クリアにする</big></button>
                    </div>
                    -->

                </form>
            </div>
        </div>
    </body>
</html>