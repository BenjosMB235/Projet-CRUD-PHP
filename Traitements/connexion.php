<?php
    include '../fonctions/config.php';
    $identifiant = $_POST['identifiant'];
    $mot_de_passe = md5($_POST['mdpc']);


    $sql = "SELECT * FROM utilisateur WHERE username='$identifiant' 
            AND mdp='$mot_de_passe'";
    

    $exe = mysqli_query($connexion, $sql);

    $result = mysqli_num_rows($exe);

    if ($result>0) {
        header('Location:../pages/vues/accueil.php?nom='.$identifiant);
    }else{
        header('Location:../pages/formulaires/connexion.php?msg=Erreur mot de passe ou login');
    }
    