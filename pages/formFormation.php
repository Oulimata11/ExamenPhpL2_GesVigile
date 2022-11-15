<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Formation</title>
    <link rel="stylesheet" href="../css/styleFormation.css">
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
                <button id="btnSignin"> Ajouter Formation </button> 
                </div>  
        </div>
            <form action="../traitements/ajoutFormation.php" id="signin" method="post">
            <label for="" style="margin-top:10px;">Nom</label>
                <input type="text" name="nomf" placeholder="Nom" required/>
                <input type="submit" value="Enregistrer" name="save">
            </form>
    </div>
</body>
</html>