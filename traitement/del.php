<?php

session_start();

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
}else{
    header('Location: login.php');
}



if(isset($_GET['id'])){
    require_once ('../ressources/dbconnect.php');

    $id = strip_tags($_GET['id']);

    try{

        $sql = 'SELECT * FROM `reponses` WHERE `id` = :id;';

        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $produit = $query->fetch();

        if(!$produit){
            header('Location: ../introuvable.html');
            die();
        }

    
        $sql = "DELETE FROM `reponses` WHERE `id` = :id;";
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        header('Location: ../results/resultats.php');
    }catch(PDOException $e){
        die($e);
    }
}else{
    header('Location: ../introuvable.html');
}

?>