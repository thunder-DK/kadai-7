<?php
    $news_title = $_POST["n_title"];
    $news_detail = $_POST["n_detail"];
    $news_author = $_POST["n_author"];
    $news_showfg = $_POST["show_flg"];
    
    $pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
    $sql = "INSERT INTO news (news_id, news_title, news_detail, show_fl, author, create_date, update_date) VALUES (NULL, :n_title, :n_detail, :n_showfg, :n_author, sysdate(), sysdate())";

    //var_dump($sql);
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':n_title', $news_title, PDO::PARAM_STR);
    $stmt->bindValue(':n_detail', $news_detail, PDO::PARAM_STR);
    $stmt->bindValue(':n_showfg', $news_showfg, PDO::PARAM_INT);
    $stmt->bindValue(':n_author', $news_author, PDO::PARAM_STR);
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
        
    <body>
</html>