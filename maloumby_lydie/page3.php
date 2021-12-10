<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conditions</h1>

    <?php 
          $age = 25;
          $ville = "Paris";
          if($age>=18 AND $ville == "Lyon"){
             echo "Vous pouvez voter";
          }
          else{
              echo "Oh désolé vous ne pouvez pas voter";
          }
          echo "<br><br>";
          //Si la moyenne est supérieure à 12 => Stage validé 
          $moyenne = 15;
          if ($moyenne>=12){
             echo "Stage validé";
          }
          else{
            echo "Stage non validé";
          }

       

          
    ?>
</body>

</html>