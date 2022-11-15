<?php
include '../connexion/base.php';
$q = $connect->query("SELECT * FROM affecter WHERE NumAff='" . $_GET["NumAff"] . "'");

while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
    $vigile = $row['IdVigile'];
    $localite = $row['CodeLoc'];
    $datedebut = $row['DateDebut'];
    $datefin = $row['DateFin'];
    $nbheure = $row['NbHeure'];
    $prime = $row['Prime'];
    
}

if (isset($_POST['modify'])) {

    $vigile = $_POST['vigile'];
    $localite = $_POST['localite'];
    $datedebut = $_POST['datedebut'];
    $datefin = $_POST['datefin'];
    $nbheure = $_POST['nbheure'];
    $prime = $_POST['prime'];


    $update = "UPDATE affecter SET IdVigile='$vigile',CodeLoc='$localite',DateDebut='$datedebut',
    DateFin='$datefin',NbHeure='$nbheure',Prime='$prime'
     WHERE NumAff= '" . $_GET["NumAff"] . "'";
    $connect->exec($update);

    if ($update) {
        $success = "Modification Effectué...";
        header('Location: ../pages/listingAffectation.php?success=1');
    }
}
?>
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
            <form action="" id="signin" method="post">
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
                <input type="date" name="datedebut" placeholder="Date de Debut" 
                value="<?php echo $datedebut; ?>" required/>
                <input type="date" name="datefin" placeholder="Date de Fin" 
                value="<?php echo $datefin; ?>" required/>
                <input type="text" name="nbheure" placeholder="Nombre d'heure"
                value="<?php echo $nbheure; ?>" required/>
                <input type="text" name="prime" placeholder="Prime" 
                value="<?php echo $prime; ?>"required/>
                <input type="submit" value="Enregistrer" name="modify">
            </form>
    </div>
</body>
</html>