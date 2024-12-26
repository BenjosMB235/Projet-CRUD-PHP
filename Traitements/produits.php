<?php
include '../fonctions/config.php';

$lib = $_POST['libelle'];
$prix = $_POST['prix'];

$sql = "INSERT INTO Produits (libelle, prix)
    VALUES ('$lib','$prix')";

$exe = mysqli_query($connexion, $sql);

if ($exe) {
    # code...
    echo 'le produit '.$lib. ' a bien été enregistré';
    header('refresh:5, ../pages/vues/accueil.php');
}else {
    
    echo "impossible d'enregistrer le produit ".$lib;
    header('refresh:5, ../pages/formulaires/produits.php');
}