<?php
if (isset($_POST['save'])) {
    include '../connexion/base.php';
    $codeloc = $_POST['codeloc'];
    $nomz = $_POST['nomz'];
    $presentation = $_POST['presentation'];
   
    $insert = "INSERT INTO zone (CodeLoc,NomZ,Presentation) 
        values ('$codeloc','$nomz','$presentation')";
    $connect->exec($insert);

    $location = $_SERVER['HTTP_REFERER'];
    if ($insert) {
        $success = "Ajout Effectué...";
        header('Location: ../pages/formZone.php?success=1');
    }
}
?>