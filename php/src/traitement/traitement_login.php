<?php
    session_start();
    //donnée qui en pratique arriveront de la base de donnée mais pour l'exercise on les enregistrent dans 2 variable brut.
    $email = 'email@email.fr';
    $mot_de_passe = 'test';
    if(isset($_SESSION['connecte'])){  
        if($_SESSION['connecte'] == TRUE){
            echo 'vous êtes connecté';
            echo "<a href='logout.php'>Se déconnecter</a>";         
        }
    }else{
        if($_POST['email'] == $email AND $_POST['mot_de_passe']){
            echo 'vous êtes connecté';
            $_SESSION['connecte'] = TRUE;
            echo "<a href='logout.php'>Se déconnecter</a>";
        }else{
            echo 'les identifiants sont incorects';
        }
    }

?>          