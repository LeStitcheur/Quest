<?php
    include ('../ressources/dbconnect.php');

    session_start();

    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }else{
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Resultats des Formulaires</title>
</head>
<body>

    <a href="../ressources/disconnect.php">Se déconnecter</a>
    <h1>Liste des résultat des formulaires</h1>


    <?php

        if(isset($_GET['erreur'])){
            if($_GET['erreur'] == "true"){
                echo "<h2>Erreur inconnue</h2>";
            }
        }

    ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom du salarié</th>
                <th scope="col">Action</th>
            </tr>
        </thead> 
  
        <tbody>
            <?php
                $requete = $db->query("SELECT*FROM reponses ORDER BY id DESC");
                while ($result = $requete->fetch(PDO::FETCH_ASSOC)) {
                    
                
            ?> 
            <tr>
                <th scope="row"><?=$result['id'];?></td>
                <td><?=$result['nom'];?></td>
                <td><a href="result.php?id=<?=$result['id'];?>&name=<?=$result['nom'];?>"><img src="../media/img/find.png" alt="Voir les réponses"></a> | <a href="../traitement/del.php?id=<?=$result['id'];?>"><img src="../media/img/delete.png" alt="supprimer"></a></td>
            </tr>
            <?php 
                } $requete->closeCursor();
            ?>
        </tbody>
    </table>
    


</body>
</html>