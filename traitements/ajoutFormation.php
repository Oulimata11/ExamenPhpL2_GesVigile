<?php
if (isset($_POST['save'])) {
    include '../connexion/base.php';

    $nomf = $_POST['nomf'];
   
    $insert = "INSERT INTO formation (NomF) 
        values ('$nomf')";
    $connect->exec($insert);

    $location = $_SERVER['HTTP_REFERER'];
    if ($insert) {
        $success = "Ajout Effectué...";
        header('Location: ../pages/formFormation.php?success=1');
    }
}
?>