<?php
    include ('dbconnect.php');

    if(isset($_POST['login']) && isset($_POST['password'])){

        $login = $_POST['login'];
        $password = $_POST['password'];

        if($login !== "" && $password !== ""){
            $sql = "SELECT * FROM `connect` WHERE `login` = :login";
            
            $query = $db->prepare($sql);

            $query->bindValue(":login", $login, PDO::PARAM_STR);

            $query->execute();

            $user = $query->fetch();

            echo $password;
            echo '<br>';
            echo $user
            echo $user['password'];
            var_dump($user);
            //if(!$user){
            //    die("L'identifiant est incorrect");
            //}
            //if(!password_verify($password, $user["password"])){
            //    die('Le mot de passe est incorrect');
            //}

            //session_start();

            //$_SESSION["user"] = [
            //    "id" => $user["id"],
             //   "pseudo" => $user["login"],
            //];

            //header('Location: ../results/resultats.php');
        
        }
            

    }
?>