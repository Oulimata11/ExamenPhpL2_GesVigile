<?php
if (isset($_POST['save'])) {
    include '../connexion/base.php';

    $vigile = $_POST['vigile'];
    $localite = $_POST['localite'];
    $datedebut = $_POST['datedebut'];
    $datefin = $_POST['datefin'];
    $nbheure = $_POST['nbheure'];
    $prime = $_POST['prime'];
   
    $insert = "INSERT INTO affecter (IdVigile,CodeLoc,DateDebut,DateFin,NbHeure,Prime) 
        values ('$vigile','$localite','$datedebut','$datefin','$nbheure','$prime')";
    $connect->exec($insert);

    $location = $_SERVER['HTTP_REFERER'];
    if ($insert) {
        $success = "Ajout Effectué...";
        header('Location: ../pages/formAffectation.php?success=1');
    }
}
?>