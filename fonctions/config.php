<?php
    $serveur = 'localhost';
    $user = 'root';
    $dbpass = '';
    $dbname ='gi2';

    $connexion = mysqli_connect($serveur,$user,$dbpass,$dbname);

//Bloc Recuperation des données de la base de données et test avec les données du formulaire de connexion      