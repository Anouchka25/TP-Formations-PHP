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
     if($age>=18 AND $ville =="Lyon"){
         echo "Vous pouvez voter";
     }else{
         echo "Oh désolé vous ne pouvez pas voter";
         echo "<br>";
         echo "Vous avez $age ans et vous habitez à $ville";
         echo "<br>";
         echo "Pour voter il faut avoir au moins 18 ans et habiter Lyon";
     }
    ?>
</body>
</html>