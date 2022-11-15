<?php
if (isset($_POST['save'])) {
    include '../connexion/base.php';
    $vigile = $_POST['vigile'];
    $formation = $_POST['formation'];
    $datedebut = $_POST['datedebut'];
    $datefin = $_POST['datefin'];
   
    $insert = "INSERT INTO offrir (IdVigile,IdF,DateDebut,DateFin) 
        values ('$vigile','$formation','$datedebut','$datefin')";
    $connect->exec($insert);

    $location = $_SERVER['HTTP_REFERER'];
    if ($insert) {
        $success = "Ajout Effectué...";
        header('Location: ../pages/formOffre.php?success=1');
    }
}
?>