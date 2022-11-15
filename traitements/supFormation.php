<?php
include '../connexion/base.php';
$delete = "DELETE FROM formation WHERE IdF= '" . $_GET["IdF"] . "'";
$connect->query($delete);
echo $delete;
if ($delete) {
    $location = $_SERVER['HTTP_REFERER'];
    header('Location: ../pages/listingFormation.php?delete=1');
}
?>