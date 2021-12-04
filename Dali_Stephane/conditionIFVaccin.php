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
<h1>Bienvenue au centre de vaccination pour prendre un rendez-vous</h1>
<br><br><br>
    <?php
   //Programme Vaccin
      $dose = 1;
      if($dose ==0){
          echo "<p>Vous devez vous faire vacciner</p>";
      }elseif ($dose ==1) {
         echo "<p>Vous devez prendre la 2eme dose</p>";
      }elseif($dose == 2){
        echo "<p>Vous devez prendre la 3eme dose</p>";
      }elseif($dose ==3){
        echo "<p>Vous devez faire un rappel de la 3eme dose</p>";
      }
      else{
          echo "<p>Vous êtes un extraterrestre</p>";
      }
    ?>
    <a href="rdv.php">Prendre rendez-vous</a>
</body>
</html>