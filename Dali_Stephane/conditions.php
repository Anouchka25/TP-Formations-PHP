<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Conditions en PHP</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Tu peux voter ou pas, allons-y vérifions</legend>
            <input type="number" name="age" placeholder = "Votre age ?">
            <input type="submit" value="Valider">
        </fieldset>
    </form>
<br><br><br>
    <?php

    //$age = isset($_POST['age']) ? $_POST['age'] : NULL; 

    $age = 25;
    $ville = "Lyon";

    if($age>=18 AND $ville == "Lyon"){
        echo "Vous êtes majeur et dans la bonne ville pour voter";
    }
    else{ 
        echo "Oh désolé, vous êtes encore mineur pour voter";
    }
    
    ?>
</body>
</html>