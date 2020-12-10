<?php
    try {
        $dns = "mysql:dbname=chatsimples;host=arioliveira.duckdns.org;port=3106;";
        $user = "root";
        $pass = "ifrn";
        $pdo = new PDO($dns, $user, $pass);
    } catch (PDOException $e) {
        echo "Falha no Brunoverso". $e->getMessage();
    }
?>