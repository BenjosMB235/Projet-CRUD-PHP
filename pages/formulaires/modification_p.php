<?php
    include '../../fonctions/config.php';
    $sql= 'SELECT * FROM Produits WHERE id='.$_GET['id'];

    $exe = mysqli_query($connexion, $sql);
    $result = mysqli_fetch_row($exe);


?>


<form style="text-align:center" action="../../Traitements/modifier_p.php" method="post">
<h4>Formulaire d'enregistrement des produits</h4>
<input name="id" type="hidden" value="<?php echo $result['0']?>">
<input name="libelle" type="text" value="<?php echo $result['1']?>"> <br><br>
<input name="prix" type="text" value="<?php echo $result['2']?>"><br><br>
<input type="submit" value="Modifier">
</form>