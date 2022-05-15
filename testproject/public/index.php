<html>
<main>
    <h2>登録した部品名一覧</h2>
    
    <?php
        try{
            
	    $dbhost = $_SERVER['RDS_HOSTNAME'];
        $dbport = $_SERVER['RDS_PORT'];
        $dbname = $_SERVER['RDS_DB_NAME'];
        $charset = 'utf8' ;

        $dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
        $username = $_SERVER['RDS_USERNAME'];
        $password = $_SERVER['RDS_PASSWORD'];

        $pdo = new PDO($dsn, $username, $password);


        }catch (PDOException $e) {
            // 接続できなかったらエラー表示
            print('DB接続エラー'); 
        }
        // 部品登録テーブルの部品名の値を降順に取得して$entryに格納
        $entry = $db->query('SELECT * FROM user ORDER BY userName DESC');
    ?>
<article>
    <?php while($resister = $entry->fetch()): ?><!-- $entryの値をfetchで1件ずつ取得して$resistorへ格納 -->
        <a href="#"><?php print(mb_substr($resister['userName'],0,50)); ?></a>
    <?php endwhile; ?>
</article>
</main>

</html>