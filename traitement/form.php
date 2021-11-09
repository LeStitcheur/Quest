<?php
    include ('../ressources/dbconnect.php');

    $nom = htmlspecialcharts($_POST['nom']);
    $prenom = $_POST['prenom'];
    $date = $_POST['date'];
    $un = $_POST['un'];
    $deux = $_POST['deux'];
    $trois = $_POST['trois'];
    $quatre = $_POST['quatre'];
    $cinq = $_POST['cinq'];
    $six = $_POST['six'];
    $sept = $_POST['sept'];
    $huit = $_POST['huit'];
    $neuf = $_POST['neuf'];
    $dix = $_POST['dix'];
    $onze = $_POST['onze'];
    $douze = $_POST['douze'];
    $treize = $_POST['treize'];
    $quatorze = $_POST['quatorze'];
    $quinze = $_POST['quinze'];
    $seize = $_POST['seize'];
    $dixsept = $_POST['dixsept'];
    $dixhuit = $_POST['dixhuit'];
    $dixneuf = $_POST['dixneuf'];
    $vingt = $_POST['vingt'];
    $vingtun = $_POST['vingtun'];
    $vingtdeux = $_POST['vingtdeux'];
    $vingttrois = $_POST['vingttrois'];


    $insert=$db->prepare("INSERT INTO reponses(nom,prenom,date,un,deux,trois,quatre,cinq,six,sept,huit,neuf,dix,onze,douze,treize,quatorze,quinze,seize,dixsept,dixhuit,dixneuf,vingt,vingtun,vingtdeux,vingttrois)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $insert->execute(array($nom,$prenom,$date,$un,$deux,$trois,$quatre,$cinq,$six,$sept,$huit,$neuf,$dix,$onze,$douze,$treize,$quatorze,$quinze,$seize,$dixsept,$dixhuit,$dixneuf,$vingt,$vingtun,$vingtdeux,$vingttrois));
    header('Location:../index.html');
?>