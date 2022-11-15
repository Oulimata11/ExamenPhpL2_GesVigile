<?php

include '../connexion/base.php';

$delete = "DELETE FROM offrir WHERE NumOff= '" . $_GET["NumOff"] . "'";
$connect->query($delete);
echo $delete;
if ($delete) {
    $location = $_SERVER['HTTP_REFERER'];
    header('Location: ../pages/listingOffre.php?delete=1');
}
?>