<?php

include '../connexion/base.php';

$delete = "DELETE FROM affecter WHERE NumAff= '" . $_GET["NumAff"] . "'";
$connect->query($delete);
echo $delete;
if ($delete) {
    $location = $_SERVER['HTTP_REFERER'];
    header('Location: ../pages/listingAffectation.php?delete=1');
}
?>