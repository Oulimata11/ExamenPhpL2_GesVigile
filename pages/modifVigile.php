<?php
include '../connexion/base.php';
$q = $connect->query("SELECT * FROM vigile WHERE IdVigile='" . $_GET["IdVigile"] . "'");

while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
    $nom = $row['NomV'];
    $prenom = $row['PrenomV'];
    $naissance = $row['Naissance'];
    $lieu = $row['Lieu'];
    $sexe = $row['Sexe'];
    $taille = $row['Taille'];
    $poids = $row['Poids'];
    $salaire = $row['Salaire'];
}

if (isset($_POST['modify'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $naissance = $_POST['naissance'];
    $lieu = $_POST['lieu'];
    $sexe = $_POST['sexe'];
    $taille = $_POST['taille'];
    $poids = $_POST['poids'];
    $salaire = $_POST['salaire'];



    $update = "UPDATE vigile SET NomV='$nom',PrenomV='$prenom',Naissance='$naissance',
    Lieu='$lieu',Sexe='$sexe',Taille='$taille',Poids='$poids',Salaire='$salaire'
     WHERE IdVigile= '" . $_GET["IdVigile"] . "'";
    $connect->exec($update);

    if ($update) {
        $success = "Modification Effectué...";
        header('Location: ../pages/listingVigile.php?success=1');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Vigile</title>
    <link rel="stylesheet" href="../css/styleVigile.css">
    <script src="https://kit.fontawesome.com/cf6fa412bd.js"> </script>
</head>
<body> 
    <?php include '../include/navbar.php'; ?>
        <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
        <div class='alert alert-success corner-radius '
         style="background-color:rgb(246, 219, 245); margin-top:-300px;">
                <p>Enregistré</p>
        </div>
        <?php unset($_GET['success']);} ?>

    <div class="best">
        <div class="buttonsForm">
                <div class="btnColor">  
                <button id="btnSignin"> Modifier Vigile </button> 
                </div>  
        </div>
            <form action=" " id="signin" method="post">
                <input type="text" name="nom" placeholder="Nom"
                value="<?php echo $nom; ?>" required/>
                <input type="text" name="prenom" placeholder="Prenom" 
                value="<?php echo $prenom; ?>" required/>
                <input type="date" name="naissance" placeholder="Date  de Naissance" 
                value="<?php echo $naissance; ?>" required/>
                <input type="text" name="lieu" placeholder="Lieu de Naissance"
                value="<?php echo $lieu; ?>"   required/>
                <select id="sel" name="sexe" >
                    <option value="masculin">Masculin</option>
                    <option value="feminin">Feminin</option>
                </select>
                <input type="text" name="taille" placeholder="Taille"
                value="<?php echo $taille; ?>" required/>
                <input type="text" name="poids" placeholder="Poids" 
                value="<?php echo $poids; ?>" required/>
                <input type="text" name="salaire" placeholder="Salaire" 
                value="<?php echo $salaire; ?>"required/>
                <input type="submit" value="Enregistrer" name="modify">
            </form>
    </div>
</body>
</html>