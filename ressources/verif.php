<?php
    include ('dbconnect.php');

    if(isset($_POST['login']) && isset($_POST['password'])){

        $login = $_POST['login'];
        $password = $_POST['password'];

        if($login !== "" && $password !== ""){
            $sql = "SELECT COUNT(*) FROM `connect` WHERE `login` = :login AND `password` = MD5(CONCAT(:password))";
            
            $query = $db->prepare($sql);

            $query->bindValue(":login", $login, PDO::PARAM_STR);
            $query->bindValue(":password", $password, PDO::PARAM_STR);

            $query->execute();

            $user = $query->fetch();

            if($user['COUNT(*)'] == 1){
                session_start();
                $_SESSION['user'] = [
                    "id" => $user['id'],
                    "pseudo" => $user['login']
                ];

                header('Location: ../results/resultats');
            }else{
                header('Location: ../results/login.php?erreur=1');
            }           

        
        }
            

    }
?>