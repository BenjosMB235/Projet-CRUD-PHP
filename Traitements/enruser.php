<?php
    include '../fonctions/config.php' ;
    $identifiant = $_POST['log'];
    $mdp = $_POST['mdp'];
    $cmdp = $_POST['cmdp'];
    $rol = $_POST['rol'];

    $sql = "INSERT INTO utilisateur (username,mdp,roleuser) 
        VALUES('$identifiant','$mdp','$rol')";

$exe = mysqli_query($connexion, $sql);


if ($exe) {
    echo "<h1 style='text-align:center'>Enregistrement d'un utilisateur</h1>
            <div style='
            width: 700px;
            height: 50px;
            text-align: center;
            margin-left: 320px;
            padding-top : 23px;
            background-color: green;
            border: solid 1px black;
            border-radius: 5px;
            color: white;'> 
            Votre compte a bien été enregistré. 
            Connecter vous avec vos informations.
            <di>";
}else {
    echo "  <h1 style='text-align:center'>Enregistrement d'un utilisateur</h1>
            <div style='
            width: 700px;
            height: 50px;
            text-align: center;
            margin-left: 320px;
            padding-top : 23px;
            background-color: red;
            border: solid 1px black;
            border-radius: 5px;
            color: white;'> 
            Votre compte n'a pas été enregistré. Contacter l'administrateur système!
            <di>";
}