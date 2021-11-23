<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Premier programme PHP</h1>
    <?php 
       echo "Bonjour tout le monde";
       echo '<br>';
       echo "Je m'appelle Anouchka et j'habite à Yvetot";
       echo '<br><br>';
       $annee = 1970;
       $nom = "Jean Michel";
       $ville = "Paris";
       //echo "$nom est née en $annee et habite $ville";
       echo $nom.' est née en '.$annee.' et j\'habite '.$ville;

       echo '<br><br>--------Opérations---------<br>';
       $nbre1 = 15;
       $nbre2 = 3;
        // addition - soustraction - multiplication - division - modulo
       echo "L'addition de $nbre1 + $nbre2 = ";
       echo $nbre1 + $nbre2;
       echo '<br><br>';
       echo "La soustraction de $nbre1-$nbre2=";
       echo $nbre1-$nbre2;
       echo '<br><br>';
       echo "La division de $nbre1/$nbre2=";
       echo $nbre1/$nbre2;
       echo '<br><br>';
       echo "La multiplication de $nbre1*$nbre2=";
       echo $nbre1*$nbre2;
       echo '<br><br>';
       echo "modulo de $nbre1%$nbre2=";
       echo $nbre1%$nbre2;





    ?>
</body>
</html>