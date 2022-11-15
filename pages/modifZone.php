<?php
include '../connexion/base.php';
$read = $connect->query("SELECT * FROM zone WHERE IdZone='" . $_GET["IdZone"] . "'");

while ($row = $read->fetch(PDO::FETCH_ASSOC)) {
    $codeloc = $row['CodeLoc'];
    $nomz= $row['NomZ'];
    $presentation=$row['Presentation'];
}

if (isset($_POST['modify'])) {
    $codeloc = $_POST['codeLoc'];
    $nomz= $_POST['nomz'];
    $presentation=$_POST['presentation'];
    
    $update = "UPDATE zone SET CodeLoc='$codeloc',NomZ='$nomz',Presentation='$presentation'
     WHERE IdZone= '" . $_GET["IdZone"] . "'";
    $connect->exec($update);

    if ($update) {
        $success = "Modification Effectué...";
        header('Location: ../pages/listingZone.php?success=1');
    }
}
?>

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
         style="background-color:rgb(246, 219, 245); margin-top:-10px;">
                <p>Enregistré</p>
        </div>
        <?php unset($_GET['success']);} ?>

    <div class="best">
        <div class="buttonsForm">
                <div class="btnColor">  
                <button id="btnSignin">Modifier Zone </button> 
                </div>  
        </div>
            <form action=" " id="signin" method="post">
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
            <input type="text" name="nomz" placeholder="Nom"
            value="<?php echo $nomz; ?>" required/>
            <label for="">Presentation</label>
            <textarea class="form-control" name="presentation" id="exampleFormControlTextarea1"
            value="<?php echo $presentation; ?>"
             rows="3"> 
            </textarea>
                <input type="submit" value="Enregistrer" name="modify">
            </form>
    </div>
</body>
</html>