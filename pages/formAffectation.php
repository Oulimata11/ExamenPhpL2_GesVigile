<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Affectation</title>
    <link rel="stylesheet" href="../css/styleAffectation.css">
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
                <button id="btnSignin"> Ajouter Affectation </button> 
                </div>  
        </div>
            <form action="../traitements/ajoutAffectation.php" id="signin" method="post">
                <select id="sel" name="vigile" placeholder="Vigile">
                        <?php 
                            include '../connexion/base.php';
                            $st=$connect->query("SELECT * FROM vigile");
                            while ($row= $st->fetch()) {
                        ?>
                            <option value="<?php echo $row['IdVigile'];?>">
                            <?php echo $row['NomV'];?> </option>
                            <?php 
                            }
                             ?>      
                </select>
                <select id="sel" name="localite" placeholder="Localité">
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
                <input type="date" name="datedebut" placeholder="Date de Debut" required/>
                <input type="date" name="datefin" placeholder="Date de Fin" required/>
                <input type="text" name="nbheure" placeholder="Nombre d'heure" required/>
                <input type="text" name="prime" placeholder="Prime" required/>
                <input type="submit" value="Enregistrer" name="save">
            </form>
    </div>
</body>
</html>