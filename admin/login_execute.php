<html>
    <head>
        <link rel="stylesheet" href="../css/default.css">
        <style>
            #input_table{
                margin-top: 100px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="container">
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
                        echo '<table id="input_table">';
                            print '<tr>';
                            print '<td>' ."ログインIDかパスワードに入力誤りがあります。<br>
                                           再度入力しなおして下さい。".
                                  '</td>';
                            print '</tr>';

                            print '<tr>';
                                print '<td>' .'<a href="login.php">元に戻る</a></td>';
                            print '</tr>';
                        echo '</table>';
                    }

                    else{
                        foreach($results as $row) {
                            $admin_fl = $row["admin_flg"];
                            
                            if($admin_fl == "1"){
                                header("Location: news_list.php");
                            }
                            elseif($admin_fl == "0"){
                                session_start();
                                
                                $_SESSION["loginid"] = $login_id;
                                $_SESSION["loginpw"] = $password;
                                $_SESSION["loginfl"] = $admin_fl;
                                
                                header("Location: ../index.php");
                            }

                        }
                    }
                }
                elseif(isset($_POST["cancel-b"])){
                    header("Location: ../index.php");   
                }
            ?>
        </div>
    </body>
</html>