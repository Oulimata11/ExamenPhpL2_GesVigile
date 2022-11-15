<?php
if (isset($_POST['save'])) {
    include '../connexion/base.php';
    $nomloc = $_POST['nomloc'];
    $superficie = $_POST['superficie'];
   
    $insert = "INSERT INTO localite (NomLoc,Superficie) 
        values ('$nomloc','$superficie')";
    $connect->exec($insert);

    $location = $_SERVER['HTTP_REFERER'];
    if ($insert) {
        $success = "Ajout Effectué...";
        header('Location: ../pages/formLocalite.php?success=1');
    }
}
?>