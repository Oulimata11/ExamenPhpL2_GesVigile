<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Vigile</title>
    <link rel="stylesheet" href="../css/styleVigil.css">
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
                <button id="btnSignin"> Ajouter un Vigile </button> 
                </div>  
        </div>
            <form action="../traitements/ajoutVigile.php" id="signin" method="post">
                <input type="text" name="nom" placeholder="Nom" required/>
                <input type="text" name="prenom" placeholder="Prenom" required/>
                <input type="date" name="naissance" placeholder="Date  de Naissance" required/>
                <input type="text" name="lieu" placeholder="Lieu de Naissance" required/>
                <select id="sel" name="sexe">
                    <option value="masculin">Masculin</option>
                    <option value="feminin">Feminin</option>
                </select>
                <input type="text" name="taille" placeholder="Taille" required/>
                <input type="text" name="poids" placeholder="Poids" required/>
                <input type="text" name="salaire" placeholder="Salaire" required/>
                <input type="submit" value="Enregistrer" name="save">
            </form>
    </div>
</body>
</html>