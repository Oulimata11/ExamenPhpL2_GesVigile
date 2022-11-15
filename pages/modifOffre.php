<?php
include '../connexion/base.php';
$read = $connect->query("SELECT * FROM offrir WHERE NumOff='" . $_GET["NumOff"] . "'");

while ($row = $read->fetch(PDO::FETCH_ASSOC)) {
    $vigile = $row['IdVigile'];
    $formation= $row['IdF'];
    $datedebut=$row['DateDebut'];
    $datefin=$row['DateFin'];
}

if (isset($_POST['modify'])) {
    $vigile = $_POST['vigile'];
    $formation= $_POST['formation'];
    $datedebut=$_POST['datedebut'];
    $datefin=$_POST['datefin'];

    $update = "UPDATE offrir SET IdVigile='$vigile',IdF='$formation',DateDebut='$datedebut',
    DateFin='$datefin' WHERE NumOff= '" . $_GET["NumOff"] . "'";
    $connect->exec($update);

    if ($update) {
        $success = "Modification Effectué...";
        header('Location: ../pages/listingOffre.php?success=1');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offre</title>
    <link rel="stylesheet" href="../css/stylOffre.css">
    <script src="https://kit.fontawesome.com/cf6fa412bd.js"> </script>
</head>
<body> 
    <?php include '../include/navbar.php'; ?>
        <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
        <div class='alert alert-success corner-radius mt-4'
         style="background-color:rgb(246, 219, 245); margin-top:10px;">
                <p>Enregistré</p>
        </div>
        <?php unset($_GET['success']);} ?>

    <div class="best">
        <div class="buttonsForm">
                <div class="btnColor">  
                <button id="btnSignin"> Modifier Offre </button> 
                </div>  
        </div>
            <form action=" " id="signin" method="post">
            <label for="">Vigile</label>
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
            <label for="">Formation</label>
            <select id="sel" name="formation" placeholder="Vigile">
                        <?php 
                            include '../connexion/base.php';
                            $st=$connect->query("SELECT * FROM formation");
                            while ($row= $st->fetch()) {
                        ?>
                            <option value="<?php echo $row['IdF'];?>">
                            <?php echo $row['NomF'];?> </option>
                            <?php 
                            }
                             ?>      
                </select>
            <label for="">Date de Debut</label>
            <input type="date" name="datedebut" placeholder="Date de Debut" 
            value="<?php echo $datedebut; ?>"required/>
            <label for="">Date de Fin</label>
            <input type="date" name="datefin" placeholder="Date de Fin" 
            value="<?php echo $datefin; ?>"required/>
                <input type="submit" value="Enregistrer" name="modify">
            </form>
    </div>
</body>
</html>