<?php
if (isset($_POST['save'])) {
    include '../connexion/base.php';

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $naissance = $_POST['naissance'];
    $lieu = $_POST['lieu'];
    $sexe = $_POST['sexe'];
    $taille = $_POST['taille'];
    $poids = $_POST['poids'];
    $salaire = $_POST['salaire'];
    $insert = "INSERT INTO vigile (NomV,PrenomV,Naissance,Lieu,Sexe,Taille,Poids,Salaire) 
        values ('$nom','$prenom','$naissance','$lieu','$sexe','$taille','$poids','$salaire')";
    $connect->exec($insert);

    $location = $_SERVER['HTTP_REFERER'];
    if ($insert) {
        $success = "Ajout Effectué...";
        header('Location: ../pages/formVigile.php?success=1');
    }
}
?>