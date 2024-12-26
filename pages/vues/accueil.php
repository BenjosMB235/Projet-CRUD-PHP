<?php
    include "../../fonctions/config.php";
    //echo 'Welcome '. $_GET['nom'];

    $sql = "SELECT * FROM Produits";

    $exe = mysqli_query($connexion, $sql);

    

    //echo $result['0'] ." ". $result['1'];

    //var_dump($exe);
    //die();
    $row = mysqli_num_rows($exe);

?>
    <div>

    <h2>Liste des produits</h2>

    <div style="margin-bottom: 15px">
        <a style="color: blue; text-decoration:none;"  href="../formulaires/produits.php">Ajouter un produit</a>
    </div>
    
        <table border="2"
            <tr>
                <th>ID</th>
                <th>Libellé</th>
                <th>Prix</th>
                <th colspan="3">Actions</th>
            </tr>
            <?php
            if ($row>0) {
                while ($result = mysqli_fetch_assoc($exe)) {
                    echo '<tr><td>' .$result['id'] .'</td>
                                <td>' .$result['libelle'] .'</td>
                                <td>' .$result['prix'] .'</td>
                                <td ><a style="color: blue; text-decoration:none" href="../formulaires/modification_p.php?id='.$result['id'].'">Modifier</a> </td>
                                <td ><a style="color: green; text-decoration:none" href="">Voir</a> </td>
                                <td ><a style="color: red; text-decoration:none" href="">Supprimer</a> </td>';
                }
            }else {
                echo '<tr> Pas de produits </tr>';
            }
                
            ?>
        </table>

    </div>