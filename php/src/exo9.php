<?php session_start();
if(key_exists('valeur_a_trouver',$_SESSION) == FALSE){
    $_SESSION['valeur_a_trouver'] = rand(1,50000);
}
echo $_SESSION['valeur_a_trouver'];

?>
<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back</title>
</head>
<body>
    <form action='' method='GET'>
        <label for="">Entrez la valeur a deviner</label>
        <input type="number" name="nombre">
        <input type="submit" value="Envoyer">
    </form>
<?php 
if(isset($_GET['nombre'])){
    if($_GET['nombre'] == $_SESSION['valeur_a_trouver']){
        echo 'Vous avez gagné';
        session_destroy();
    }else{
        if($_GET['nombre'] < $_SESSION['valeur_a_trouver']){
            echo 'plus <br>';
        }else{
            echo 'moins <br>';
        }
    }
}
   
?>
</body> 
</html>