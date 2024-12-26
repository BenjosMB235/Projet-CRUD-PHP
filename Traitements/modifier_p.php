<?php
include '../fonctions/config.php';

$lib = $_POST['libelle'];
$prix = $_POST['prix'];
$id = $_POST['id'];

$sql = "UPDATE Produits SET libelle ='$lib', prix = '$prix'
    WHERE id = $id";


$exe = mysqli_query($connexion, $sql);

if ($exe) {
    # code...
    echo 'le produit '.$lib. ' a bien été modifié';
    header('refresh:5, ../pages/vues/accueil.php');
}else {
    
    echo "impossible de modifier le produit ".$lib;
    header('refresh:5, ../pages/formulaires/modification_p.php?id='.$result['id']);
}