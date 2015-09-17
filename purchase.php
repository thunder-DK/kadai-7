<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta data="description" contents="">
        <meta data="keywords" contents="">
        <title>購入ありがとうございます！</title>
 
    </head>
 
    <body>
        
        <?php
            if(isset($_POST["clear-b"])){
                include("index.php");
                exit;
                
            }
            else if(isset($_POST["conv-b"])){
            }
        ?> 
        
        <div id="container">
            <p style="margin-left: 40%;"><b>購入ありがとうございます！</b></p>
            <p style="margin-left: 40%;">引き続き購入される方は<a href="index.php">コチラ</a></p>
        </div>
        
    </body>
</html>