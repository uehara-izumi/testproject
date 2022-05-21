<html>
<main>
    <h2>登録品名一した部覧</h2>
    
    <?php
        //phpinfo();
        try{
            
	    $dbhost = 'database-2.ctmklwk6w2n1.ap-northeast-1.rds.amazonaws.com';
        $dbport = '3306';
        $dbname = 'izumiTest';
        $charset = 'utf8' ;

        $dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
        $username = 'admin';
        $password = 'u73120491';

        $pdo = new PDO($dsn, $username, $password);

        }catch (PDOException $e) {
            // 接続できなかったらエラー表示
            print('DB接続エラー'); 
            print($e);
        }
        // 部品登録テーブルの部品名の値を降順に取得して$entryに格納
        $entry = $pdo->query('SELECT * FROM users ORDER BY id DESC');
    ?>
<article>
    <?php while($resister = $entry->fetch()): ?><!-- $entryの値をfetchで1件ずつ取得して$resistorへ格納 -->
        <a href="#"><?php print(mb_substr($resister['name'],0,50)); ?></a>
    <?php endwhile; ?>
</article>
</main>

</html>