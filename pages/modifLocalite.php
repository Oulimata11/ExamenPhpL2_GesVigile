<?php
include '../connexion/base.php';
$read = $connect->query("SELECT * FROM localite WHERE CodeLoc='" . $_GET["CodeLoc"] . "'");

while ($row = $read->fetch(PDO::FETCH_ASSOC)) {
    $nomloc = $row['NomLoc'];
    $superficie= $row['Superficie'];
}

if (isset($_POST['modify'])) {

    
    $nomloc = $_POST['nomloc'];
    $superficie = $_POST['superficie'];

    $update = "UPDATE localite SET NomLoc='$nomloc',Superficie='$superficie'
     WHERE CodeLoc= '" . $_GET["CodeLoc"] . "'";
    $connect->exec($update);

    if ($update) {
        $success = "Modification Effectué...";
        header('Location: ../pages/listingLocalite.php?success=1');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Localité</title>
    <link rel="stylesheet" href="../css/styleLocalite.css">
    <script src="https://kit.fontawesome.com/cf6fa412bd.js"> </script>
</head>
<body> 
    <?php include '../include/navbar.php'; ?>
        <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
        <div class='alert alert-success corner-radius mt-4'
         style="background-color:rgb(246, 219, 245); margin-top:-300px;">
                <p>Enregistré</p>
        </div>
        <?php unset($_GET['success']);} ?>

    <div class="best">
        <div class="buttonsForm">
                <div class="btnColor">  
                <button id="btnSignin"> Modifier Localité </button> 
                </div>  
        </div>
            <form action=" " id="signin" method="post">
                <input type="text" name="nomloc" placeholder="Nom Localité"
                value="<?php echo $nomloc; ?>" required/>
                <input type="text" name="superficie" placeholder="Superficie"
                value="<?php echo $superficie; ?>" required/>
                <input type="submit" value="Enregistrer" name="modify">
            </form>
    </div>
</body>
</html>