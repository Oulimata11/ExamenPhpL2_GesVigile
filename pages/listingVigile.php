<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Vigile</title>
</head>
<body>
    <?php include '../include/navbar.php' ?>
    <?php if (isset($_GET['delete']) && $_GET['delete'] == 1) { ?>
    <div class='alert alert-danger corner-radius container mt-4'
    style="background-color:rgb(246, 219, 245); margin-top: 300px;">
        <p> Supprimé</p>
    </div>
    <?php unset($_GET['delete']);
    } ?>

    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
    <div class='alert alert-warning corner-radius container mt-4'>
        <p>Modifié</p>
    </div>
    <?php unset($_GET['success']);
    } ?>
    <div class="container mt-5">
            <div class="debut" style="margin-top:110px ;position: relative; border-radius: 30px;
            box-shadow: 0 0 7px 0 blueviolet; background:linear-gradient(45deg,#e2a9e5 40%,#2b94e5 60%);
            border:none; padding:10px 29px; width:50%;">
                Liste des Vigiles
            </div>
            <div class="milieu" style="margin-top:30px ;">
                <table class="table" >
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Naissance</th>
                        <th>Lieu</th>
                        <th>Sexe</th>
                        <th>Taille</th>
                        <th>Poids</th>
                        <th>Salaire</th>
                    </tr>
                    <tr>
                        <?php
                        include '../connexion/base.php';
                        $stmt = $connect->query("SELECT * FROM vigile");
                        while ($row = $stmt->fetch()) { ?>

                    <tr>
                        <td><?php echo $row["IdVigile"]; ?></td>
                        <td><?php echo $row["NomV"]; ?></td>
                        <td><?php echo $row["PrenomV"]; ?></td>
                        <td><?php echo $row["Naissance"]; ?></td>
                        <td><?php echo $row["Lieu"]; ?></td>
                        <td><?php echo $row["Sexe"]; ?></td>
                        <td><?php echo $row["Taille"]; ?></td>
                        <td><?php echo $row["Poids"]; ?></td>
                        <td><?php echo $row["Salaire"]; ?></td>
                        <td><a class="btn"
                         style=" background-color:#e2a9e5; color:black;border-radius:30px;
                        width:100%;border:none;outline:none;padding:8px 0 8px 15px;font-size:15px;cursor:pointer;"
                            href="../pages/modifVigile.php?IdVigile=<?php echo $row['IdVigile']; ?>">
                            Modifier</a></td>
                        <td><a class="btn"
                        style="background-color:#2b94e5; color:black;border-radius:30px;
                        width:100%;border:none;outline:none;padding:8px 0 8px 15px;font-size:15px;cursor:pointer;"
                            href="../traitements/suppVigile.php?IdVigile=<?php echo $row['IdVigile']; ?>"
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