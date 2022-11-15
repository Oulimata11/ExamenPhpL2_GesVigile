<?php

include '../connexion/base.php';

$delete = "DELETE FROM vigile WHERE IdVigile = '" . $_GET["IdVigile"] . "'";
$connect->query($delete);
echo $delete;
if ($delete) {
    $location = $_SERVER['HTTP_REFERER'];
    header('Location: ../pages/listingVigile.php?delete=1');
}
?>