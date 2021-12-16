<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Boucles while et for</h1>
    <table border = 1>
        <tr>
            <th>Nombre</th>
            <th>Carré du nombre</th>
            <th>Racine carré du nombre</th>
        </tr>
    
    <?php 

    //afficher les 10 premiers nombres, leur carré et leur racine carré
    
    for($nombre = 1; $nombre <=10 ; $nombre++){
        //echo $nombre. ' '.$nombre * $nombre.' '.sqrt($nombre).'<br>';
        echo '<tr>';
        echo '<td>'.$nombre.'</td>';
        echo '<td>'.$nombre * $nombre.'</td>';
        echo '<td>'.sqrt($nombre).'</td>';
        echo '</tr>';
    }
?>
</table>
<?php
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100)
{
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
}

for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}



          
             
    ?>
</body>

</html>