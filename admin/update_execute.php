<?php
    $n_id = $_POST["news_id"];
    $n_title = $_POST["n_title"];
    $n_detail = $_POST["n_detail"];
    $n_author = $_POST["n_author"];
    $n_flg = $_POST["show_flg"];

    $pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
    $sql = "UPDATE news SET news_title = :n_title, news_detail = :n_detail, show_fl = :n_showfl, author = :n_author, update_date = sysdate() WHERE news_id = :n_id";

    var_dump($sql);
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':n_id', $n_id, PDO::PARAM_INT);
    $stmt->bindValue(':n_title', $n_title, PDO::PARAM_STR);
    $stmt->bindValue(':n_detail', $n_detail, PDO::PARAM_STR);
    $stmt->bindValue(':n_showfl', $n_flg, PDO::PARAM_INT);
    $stmt->bindValue(':n_author', $n_author, PDO::PARAM_STR);
    $result = $stmt->execute();
    //var_dump($result);

    if($result == NULL){
        print "登録に失敗しました。<br>
               再度入力しなおして下さい。<br>";    
        print '<a href="input.php">元に戻る</a>';
    }
    else{
        header("Location: news_list.php");
    }

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
    </head>
    <body>
    </body>
</html>