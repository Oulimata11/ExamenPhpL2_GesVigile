<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Liste Localité</title>
</head>
<body>
    <?php include '../include/navbar.php' ?>
    <?php if (isset($_GET['delete']) && $_GET['delete'] == 1) { ?>
    <div class='alert alert-danger corner-radius container mt-4'
    style="background-color:rgb(246, 219, 245); margin-top: 300px;">
        <p>Supprimé</p>
    </div>
    <?php unset($_GET['delete']);
    } ?>

    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
    <div class='alert alert-warning corner-radius container mt-4'
    style="background-color:rgb(246, 219, 245); margin-top: 300px;">
        <p>Modifié</p>
    </div>
    <?php unset($_GET['success']);
    } ?>
    <div class="container mt-5">
        
            <div class="debut" style="margin-top:110px ;position: relative; border-radius: 30px;
            box-shadow: 0 0 7px 0 blueviolet; background:linear-gradient(45deg,#e2a9e5 40%,#2b94e5 60%);
            border:none; padding:10px 29px; width:50%;">
                Liste des Localités
            </div>
            <div class="milieu" style="margin-top:30px ;">
                <table class="table" >
                    <tr>
                        <th>Code</th>
                        <th>Nom</th>
                        <th>Superficie</th>
                    </tr>
                    <tr>
                        <?php
                        include '../connexion/base.php';
                        $stmt = $connect->query("SELECT * FROM localite");
                        while ($row = $stmt->fetch()) { ?>

                    <tr>
                        <td><?php echo $row["CodeLoc"]; ?></td>
                        <td><?php echo $row["NomLoc"]; ?></td>
                        <td><?php echo $row["Superficie"]; ?></td>
                        <td><a class="btn"
                        style="background-color:#e2a9e5; color:black; border-radius:30px;
                        width:100%; border:none; outline:none; padding:8px 0 8px 15px; font-size:15px;cursor:pointer;"
                                href="../pages/modifLocalite.php?CodeLoc=<?php echo $row['CodeLoc']; ?>">
                                Modifier</a></td>
                        <td><a class="btn"
                        style="background-color:#2b94e5; color:black;border-radius:30px;
                        width:100%;border:none;outline:none;padding:8px 0 8px 15px;font-size:15px;cursor:pointer;"
                                href="../traitements/suppLocalite.php?CodeLoc=<?php echo $row['CodeLoc']; ?>"
                                onclick="return confirm('Vous voulez vraiment supprimer ?');">Supprimer</a>
                        </td>

                    </tr>

                    <?php
                        }

                ?>
                    </tr>
                </table>
            </div>
       
    </div>

</body>

</html>