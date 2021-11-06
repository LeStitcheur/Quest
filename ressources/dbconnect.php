<?php
    define("DBHOST", "foudwicha.mysql.db");
    define("DBUSER","foudwicha");
    define("DBPASS","Ht5AzC8b9");
    define("DBNAME","foudwicha");

    $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

    try{
        $db = new PDO($dsn, DBUSER, DBPASS);

        $db->exec('SET NAMES "UTF8"');
        
    }catch(PDOException $e){
        die($e->getMessage());
    }

?>