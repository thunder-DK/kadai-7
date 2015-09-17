<?php

    if(isset($_POST["next-b"])){

        $login_id = $_POST["name"];
        $password = $_POST["password"];

        $pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
        $sql = "SELECT * FROM ec_pi WHERE login_id = :loginid AND login_pw = :loginpw";
        //var_dump($sql);

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':loginid', $login_id, PDO::PARAM_STR);
        $stmt->bindValue(':loginpw', $password, PDO::PARAM_STR);
        $bresult = $stmt->execute();
        //var_dump($bresult);

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($results);
        
        if($results == NULL){
            print "ログインIDかパスワードに入力誤りがあります。<br>
                   再度入力しなおして下さい。<br>";
            
            print '<a href="login.php">元に戻る</a>';
        }

        else{
            foreach($results as $row) {
                //print '<a href="news_list.php"></a>';
                header("Location: news_list.php");
                
                /*
                $id = $row["id"];
                $name1 = $row["name1"];
                $name2 = $row["name2"];
                $add1 = $row["address1"];
                $add2 = $row["address2"];
                $email = $row["email"];

                print $id;
                print $name1;
                print $name2;
                print $add1;
                print $add2;
                print $email;
                */
            }
        }
    }
    elseif(isset($_POST["cancel-b"])){
        header("Location: ../index.php");   
    }
?>

<html>
    <head>
    </head>
    <body>
        <!--
        <form action="login_execute.php" method="post">
            ログイン名: <input type="text" name="name" value="" />
            パスワード: <input type="password" name="password" value="" />
            <input type="submit" name="next-b"/>
            <input type="submit" value="元に戻る" name="cancel-b">
        </form>
        -->
    </body>
</html>