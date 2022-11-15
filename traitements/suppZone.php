<?php

include '../connexion/base.php';

$delete = "DELETE FROM zone WHERE IdZone= '" . $_GET["IdZone"] . "'";
$connect->query($delete);
echo $delete;
if ($delete) {
    $location = $_SERVER['HTTP_REFERER'];
    header('Location: ../pages/listingZone.php?delete=1');
}
?>