<?php
    include ('../ressources/dbconnect.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Resultats des Formulaires</title>
</head>
<body>
    <h1>Liste des résultat des formulaires</h1>

    <table id="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du salarié</th>
                <th>Action</th>
            </tr>
        </thead> 
  
        <tbody>
            <?php
                $requete = $db->query("SELECT*FROM reponses ORDER BY id DESC");
                while ($result = $requete->fetch(PDO::FETCH_ASSOC)) {
                    
                
            ?> 
            <tr>
                <td><?=$result['id'];?></td>
                <td><?=$result['nom'];?></td>
                <td><a href="result.php?id=<?=$result['id'];?>&name=<?=$result['nom'];?>"><img src="../media/img/find.png" alt="Voir les réponses"></a> | <a href="../traitement/delete.php?id=<?=$result['id'];?>"><img src="../media/img/delete.png" alt="supprimer"></a></td>
            </tr>
            <?php 
                } $requete->closeCursor();
            ?>
        </tbody>
    </table>
    


</body>
</html>