<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<h1>Boucles while et for en PHP</h1>
    <?php
    for($i =1; $i<=10; $i++){
      echo $i.'<br>' ;
      }

      echo "<br><br>";

      $nombre_heures = 2;
      while($nombre_heures<=10){
        echo "Le nombre d'heures est insuffisant <br>";
        $nombre_heures++;  //$nombre_heures = $nombre_heures+1
      }
 
   
    ?>
</body>
</html>