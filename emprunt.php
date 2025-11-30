<?php
if (isset($_POST['save'])) {
    include '../conf/db.php';

    $nom = $_POST['nomEmprunt'];
    $description = $_POST['description'];



    $r = "INSERT INTO emprunt (nomEmprunt,description) 
        values ('$nom','$description')";
    $connexion->exec($r);

    $location = $_SERVER['HTTP_REFERER'];
    if ($r) {
        $success = "Adherant ajouté avec succès...";
        header('Location: ../pages/emprunt.php?success=1');
    }
}