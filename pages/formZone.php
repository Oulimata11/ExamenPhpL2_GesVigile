<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Zone</title>
    <link rel="stylesheet" href="../css/stylZone.css">
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
                <button id="btnSignin"> Ajouter Zone </button> 
                </div>  
        </div>
            <form action="../traitements/ajoutZone.php" id="signin" method="post">
            <label for="">Localite</label>
            <select name="codeloc" id="sel">
                            <?php 
                            include '../connexion/base.php';
                            $st=$connect->query("SELECT * FROM localite");
                            while ($row= $st->fetch()) {?>
                            <option value="<?php echo $row['CodeLoc'];?>">
                            <?php echo $row['NomLoc'];?> </option>
                            <?php 
                            }
                            ?>
                        </select>
            <label for="">Nom</label>
            <input type="text" name="nomz" placeholder="Nom" required/>
            <label for="">Presentation</label>
            <textarea class="form-control" name="presentation" id="exampleFormControlTextarea1"
             rows="3" placeholder=" Presentation"> 
            </textarea>
                <input type="submit" value="Enregistrer" name="save">
            </form>
    </div>
</body>
</html>