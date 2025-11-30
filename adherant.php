<?php
if (isset($_POST['save'])) {
    include '../conf/db.php';

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $genre = $_POST['genre'];
    $dateNaissance = $_POST['dateNaissance'];
    $cotisation = $_POST['cotisation'];


    $r = "INSERT INTO adherant (nom,prenom,genre,dateNaissance,cotisation) 
        values ('$nom','$prenom','$genre','$dateNaissance','$cotisation')";
    $connexion->exec($r);

    $location = $_SERVER['HTTP_REFERER'];
    if ($r) {
        $success = "Adherant ajouté avec succès...";
        header('Location: ../pages/adherant.php?success=1');
    }
}