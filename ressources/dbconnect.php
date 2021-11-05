<?php
    define("DBHOST", "localhost");
    define("DBUSER","root");
    define("DBPASS","");
    define("DBNAME","quest");

    $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

    try{
        $db = new PDO($dsn, DBUSER, DBPASS);

        $db->exec('SET NAMES "UTF8"');
        
    }catch(PDOException $e){
        die($e->getMessage());
    }

?>