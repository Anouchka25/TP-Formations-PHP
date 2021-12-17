<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Lettre de motivation</h1>
    <?php 
      // echo "bonjour tout le monde <br>";
       $nom = "DURAND"; 
       $age = 12;
       $genre = "Madame";
       $poste = "Puricultrice";
       $annees_experiences = 10;
       $domaine = "petite enfance";
      // echo $nom;
      // echo $age;
       echo "<br>";
       //echo "$genre $nom a $age ans";
       echo "Je m'appelle $genre $nom et je suis intéressé par le poste de $poste. j'ai travaillé pendant $annees_experiences ans dans le domaine $domaine.";
       
       echo "<br>-------Conditions-----------------<br>";
       if ($age>=18){
           echo "vous pouvez voter";

       }else {
           echo "vous ne pouvez pas voter";
       }

       echo "<br>";
       //Prime de noel de 100€ par enfants pour des familles 
       //qui ont au moins 3 enfants.
       $nombre_enfants = 2;
       $revenu_foyer = 1500;
       $statut = "salarié";
       
       if ($nombre_enfants>=3 AND 
           $revenu_foyer < 2000 AND
           $statut != "retraité"
           )
           {
           echo "Vous avez $nombre_enfants enfants, votre revenu du foyer est de $revenu_foyer € et vous êtes d'un statut de $statut <br>";
           echo "vous avez droit à la prime d'un montant égal à : ";
           echo $nombre_enfants * 100 .' €';
       }
       else {
        echo "Vous avez $nombre_enfants enfants, votre revenu du foyer est de $revenu_foyer € et vous êtes d'un statut de $statut <br>";
           echo " vous n'avez pas droit à la prime cette année";
       }




       
    ?>
    


</body>
</html>