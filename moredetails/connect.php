    <?php

    $dsn = "mysql:host=locahost;dbname=users";
    $dbusername = "root";
    $dbpassword = "";
    try{
        $pdo = new pdo($dsn,$dbusername,$dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "connection problems.".$e->getMessage();
    }