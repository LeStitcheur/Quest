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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>
        <?php 
            if(isset($_GET['name'])){
                $name = $_GET['name'];
                echo $name.' - Réponses formulaires';
            }else{
                header ('Location: introuvable.html');
            }
        ?>
    </title>
</head>
<body>

    <a href="resultats.php">Revenir à la page des résultats</a>
    <?php
        $id = $_GET['id'];
        
        $requete = $db->query("SELECT * FROM reponses WHERE id=".$id); 
        $result = $requete->fetch(PDO::FETCH_ASSOC);
    ?>

    <h1>Réponses de <?=$result['nom'];?> <?=$result['prenom'];?></h1>
        
        <div class="question">
            <span>Question : Votre nom</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['nom'];?></p>
        </div>
        <div class="question">
            <span>Question : Votre prénom</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['prenom'];?></p>
        </div>
        <div class="question">
            <span>Question : Date de prise de poste</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['date'];?></p>
        </div>
        <div class="question">
            <span>Question : Quelles étaient vos attentes en entrant sur le chantier d'insertion de l'ULAMIR-CPIE ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['un'];?></p>
        </div>
        <div class="question">
            <span>Question : Dans quelles mesures les avez vous atteintes ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['deux'];?></p>
        </div>
        <div class="question">
            <span>Question : Quels avis avez vous sur le chantier de l’ULAMIR-CPIE ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['trois'];?></p>
        </div>
        <div class="question">
            <span>Question : Auriez-vous des idées pour l’améliorer ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['quatre'];?></p>
        </div>
        
        <h2>Quel est votre avis sur :</h2>

        <div class="question">
            <span>Question : Les conditions de travail sont-elles satisfaisantes ? Dans quelles mesures ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['cinq'];?></p>
        </div>
        <div class="question">
            <span>Question : Le travaille dans le groupe du chantier ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['six'];?></p>
        </div>
        <div class="question">
            <span>Question : La communication au sein du groupe du chantier ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['sept'];?></p>
        </div>
        <div class="question">
            <span>Question : Le travaille avec l’encadrant technique ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['huit'];?></p>
        </div>
        <div class="question">
            <span>Question : La communication avec l’encadrant technique ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['neuf'];?></p>
        </div>
        <div class="question">
            <span>Question : Le travaille avec la CIP (conseillère d’insertion professionnel) ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['dix'];?></p>
        </div>
        <div class="question">
            <span>Question : La communication avec la CIP (conseillère d’insertion professionnel) ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['onze'];?></p>
        </div>
        <div class="question">
            <span>Question : Le travaille avec le coordinateur ?</span>
        </div>
        <div class="reponse">
        <span>Réponse :</span>
            <p><?=$result['douze'];?></p>
        </div>
        <div class="question">
            <span>Question : La communication avec le coordinateur ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['treize'];?></p>
        </div>
        <div class="question">
            <span>Question : Le travaille avec la direction ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['quatorze'];?></p>
        </div>
        <div class="question">
            <span>Question : La communication avec la direction ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['quinze'];?></p>
        </div>
        <div class="question">
            <span>Question : Votre de travail personnel ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['seize'];?></p>
        </div>
        <div class="question">
            <span>Question : Votre travail avec le groupe ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['dixsept'];?></p>
        </div>
        <div class="question">
            <span>Question : Votre communication avec les autres ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['dixhuit'];?></p>
        </div>
        <div class="question">
            <span>Question : Votre communication avec les autres ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['dixneuf'];?></p>
        </div>
        <div class="question">
            <span>Question : Votre avis sur le groupe ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['vingt'];?></p>
        </div>
        <div class="question">
            <span>Question : Votre avenir professionnel ?</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['vingtun'];?></p>
        </div>
        <div class="question">
            <span>Question : Êtes-vous satisfaits de l’accompagnement ?  </span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['vingtdeux'];?></p>
        </div>
        <div class="question">
            <span>Question : Avez-vous d’autres points à aborder ?  (si oui lequel)</span>
        </div>
        <div class="reponse">
            <span>Réponse :</span>
            <p><?=$result['vingttrois'];?></p>
        </div>
</body>
</html>