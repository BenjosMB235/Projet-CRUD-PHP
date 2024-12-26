<form style="text-align:center" action="../../Traitements/connexion.php" method="POST">
    <h1>Page de connexion</h1>
    
    <p style="color:red; text-align: center;">
    <?php 
    if (isset($_GET['msg'])) {
        echo $_GET['msg'];
    }
    ?>
    </p>
    
    <input type="text" placeholder="identifiant" name="identifiant" required> <br> <br>
    <input name="mdpc" type="password" placeholder="Mot de passe" required> <br>
    <input type="submit" value="Se Connecter">
</form>