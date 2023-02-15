<?php
     session_start();
     if(isset($_SESSION['connecte'])){
        if($_SESSION['connecte'] == TRUE){
            header('Location: /traitement/login.php');
        }
    }   
?>  
<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="traitement/traitement_login.php" method="post">
        <label>Entrez l'email</label>
        <input type="email" name="email" id="">
        <label>Entrez le mot de passe</label>
        <input type="text" name="mot_de_passe" id="">
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>