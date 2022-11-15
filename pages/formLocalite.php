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
                    <button id="btnSignin"> Ajouter Localité </button> 
                    </div>  
            </div>
            <form action="../traitements/ajoutLocalite.php" id="signin" method="post">
            <label for="">Nom Localité</label>
                <input type="text" name="nomloc" placeholder="Nom Localité" required/>
            <label for="">Superficie</label>
                <input type="text" name="superficie" placeholder="Superficie" required/>
                <input type="submit" value="Enregistrer" name="save">
            </form>
    </div>
</body>
</html>