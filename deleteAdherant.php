<?php

include '../conf/db.php';

$r = "DELETE FROM adherant WHERE idAdherant = '" . $_GET["idAdherant"] . "'";
$connexion->query($r);
echo $r;
if ($r) {
    $location = $_SERVER['HTTP_REFERER'];
    header('Location: ../pages/listeAdherant.php?delete=1');
}