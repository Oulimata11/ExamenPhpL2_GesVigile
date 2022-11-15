<?php

include '../connexion/base.php';

$delete = "DELETE FROM localite WHERE CodeLoc= '" . $_GET["CodeLoc"] . "'";
$connect->query($delete);
echo $delete;
if ($delete) {
    $location = $_SERVER['HTTP_REFERER'];
    header('Location: ../pages/listingLocalite.php?delete=1');
}
?>