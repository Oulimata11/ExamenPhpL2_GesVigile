<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>
</head>

<body>
    <?php include '../include/navbar.php' ?>

    <?php if (isset($_GET['delete']) && $_GET['delete'] == 1) { ?>
    <div class='alert alert-danger corner-radius'
    style="background-color:rgb(246, 219, 245); margin-top: 300px;">
        <p>Offre Supprimée</p>
    </div>
    <?php unset($_GET['delete']);
    } ?>

    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
    <div class='alert alert-warning corner-radius'
    style="background-color:rgb(246, 219, 245); margin-top: 300px;">
        <p>Offre Ajoutée</p>
    </div>
    <?php unset($_GET['success']);
    } ?>
    <div class="container mt-3">
            <div class="debut" style="margin-top:110px ;position: relative; border-radius: 30px;
            box-shadow: 0 0 7px 0 blueviolet; background:linear-gradient(45deg,#e2a9e5 40%,#2b94e5 60%);
            border:none; padding:10px 29px; width:50%;">
                Liste des Offres
            </div>
            <div class="milieu" style="margin-top:30px ;">
                <table class="table" >
                    <tr>
                        <th>Numero Offre</th>
                        <th>Vigile</th>
                        <th>Formation</th>
                        <th>Date de Debut</th>
                        <th>Date de Fin</th>
                    </tr>
                    <tr>
                        <?php
                        include '../connexion/base.php';
                        $stmt = $connect->query ("SELECT * FROM offrir");
                        while ($row = $stmt->fetch()) { ?>
                    <tr>
                        <td><?php echo $row["NumOff"]; ?></td>
                        <td><?php echo $row["IdVigile"]; ?></td>
                        <td><?php echo $row["IdF"]; ?></td>
                        <td><?php echo $row["DateDebut"]; ?></td>
                        <td><?php echo $row["DateFin"]; ?></td>
                        <td><a class="btn"
                        style="background-color:#e2a9e5; color:black;border-radius:30px;
                        width:100%;border:none;outline:none;padding:8px 0 8px 15px;font-size:15px;cursor:pointer;"
                                href="../pages/modifOffre.php?NumOff=<?php echo $row['NumOff']; ?>">
                                Modifier</a></td>
                        <td><a class="btn"
                        style="background-color:#2b94e5; color:black;border-radius:30px;
                        width:100%;border:none;outline:none;padding:8px 0 8px 15px;font-size:15px;cursor:pointer;"
                                href="../traitements/suppOffre.php?NumOff=<?php echo $row['NumOff']; ?>"
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