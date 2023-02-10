<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back</title>
</head>
<body>
    <center><h2>----------------------------------------------------------------------------- Exo 1 -----------------------------------------------------------------------------</h2></center>
    <?php
        echo 'Hello World !!';
        var_dump('Hello World !!');
        echo "<br>";
    ?>
    <br>
    <center><h2>----------------------------------------------------------------------------- Exo 2 ----------------------------------------------------------------------------</h2></center>
    <?php
        $string = 'Hello World !!';
        echo $string;
        echo "<br>";
    ?>
    <center><h2>----------------------------------------------------------------------------- Exo 3 ----------------------------------------------------------------------------</h2></center>
    <?php
        $a = 5;
        $b = 11;
        echo '$a = '.$a.'/$b = '.$b.'<br>';
        $c = $a;
        $a = $b;
        $b = $c;
        echo '$a = '.$a.'/$b = '.$b.'<br>';
    ?>
    <center><h2>----------------------------------------------------------------------------- Exo 4 ----------------------------------------------------------------------------</h2></center>
    <?php
        for($i = 1;$i<=10;$i++){
            echo 'Hello World : '.$i.'<br>';
        }
    ?>
    <center><h2>----------------------------------------------------------------------------- Exo 5 ----------------------------------------------------------------------------</h2></center>
    <?php
        for($i = 1;$i<=10;$i++){
            if($i%2 == 0){
                echo 'Hello World : '.$i.'<br>';
            }
        }
    ?>
    <center><h2>----------------------------------------------------------------------------- Exo 6 ----------------------------------------------------------------------------</h2></center>
    <?php
        
        do{
            $aleatoire = rand(0,2);
            echo "la valeur aléatoire est $aleatoire. <br>";
        }while(($aleatoire != 1))
    ?>
    <center><h2>----------------------------------------------------------------------------- Exo 6(bis) ----------------------------------------------------------------------------</h2></center>
    <?php 
        $aleatoire = rand(0,2);
        while($aleatoire != 1){
            echo "la valeur aléatoire est $aleatoire. <br>"; 
            $aleatoire = rand(0,2);
        }
        //mettre exxercice sur tableau 
    ?>
    <center><h2>----------------------------------------------------------------------------- Exo 7 ----------------------------------------------------------------------------</h2></center>
    <?php
        $villes = ['Paris','Marseille','Reims','Charleville'];
        echo "$villes[0]<br> $villes[1]<br> $villes[2]<br> $villes[3]<br>";
    ?>  
    <center><h2>----------------------------------------------------------------------------- Exo 7 ----------------------------------------------------------------------------</h2></center>
    <?php
        $villes = ['Paris','Marseille','Reims','Charleville'];
        foreach($villes as $ville){
            echo "$ville<br>";
        }
    ?>
    <center><h3>---------------------------------------------------------------------------------------------------------- OU ---------------------------------------------------------------------------------------------------------</h3></center>
    <?php
        for($i=0;$i < 4;$i++){
            echo "$villes[$i] <br>";
        }
    ?>  
    <center><h2>----------------------------------------------------------------------------- Exo 7 ----------------------------------------------------------------------------</h2></center>
    <?php
        $infosVilles = [
                            [
                                'ville'=>'Paris',
                                'habitants' => '2,161 millions',
                                'superficie' => '104,5',
                                'altitude' => '35',
                            ],
                            [
                                'ville' => 'Marseille',
                                'habitants' => '861 635',
                                'superficie' => '240,6',
                                'altitude' => '242',
                            ],
                            [
                                'ville' => 'Reims',
                                'habitants' => '184 076',
                                'superficie' => '46, 9',
                                'altitude' => '95',
                           ],
                            [
                                'ville' => 'Charleville',
                                'habitants' => '47 847',
                                'superficie' => '31,44',
                                'altitude' => '228',

                            ],
                        ];
        foreach($infosVilles as $infoVille){
            echo 'La ville de '.$infoVille['ville'].' a '.$infoVille['habitants'].' habitants, pour une superficie de '.$infoVille['superficie']. ' km2, et une altitide de '.$infoVille['altitude'].' m. <br>';
        }
    ?>
    <center><h2>----------------------------------------------------------------------------- Exo 7 ----------------------------------------------------------------------------</h2></center>
    <form action='' method='GET'>
        <label>pseudo</label>
        <input type="text" name='pseudo-get'>
        <input type="submit" value="Envoyer">
    </form>
    <?php
        if(isset($_GET['pseudo-get'])){
            echo $_GET['pseudo-get'];
        }
    ?>
     <center><h2>----------------------------------------------------------------------------- Exo 8 ----------------------------------------------------------------------------</h2></center>
    <form action='exo8.php' method='POST'>
        <label>pseudo</label>
        <input type="text" name='pseudo-post'>
        <input type="submit" value="Envoyer">
    </form>
    <?php
        if(isset($_POST['pseudo-post'])){
            echo $_POST['pseudo-post'];
        }
    ?>
</body>
</html>