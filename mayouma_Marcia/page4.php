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
    //Prime de noel de 100€ par enfants pour des familles 
       //qui ont au moins 3 enfants.
       $enfant = 6;
       $salaire = 5500;
       if($enfant>=3 AND $salaire < 2000){
           echo "Vous etes eligible pour benéficié de la prime <br>";
           echo "Vous allez recevoir un montant de ";
           echo $enfant*100;
           echo " € sur votre compte bancaire. ";
           echo "Aucune autre démarche n'est à effectuer";
        } else{
            echo "oh desolé vous n'etes pas eligible pour benéficié de la prime " ;
            echo"<br>" ;
            echo "vous avez $enfant enfant(s) et un revenu de $salaire €" ;
            echo " <br>" ;
            echo "pour en benéficié de la prime il faut avoir au moins 3 enfants et un salaire inférieur à 2000€" ;
        }
          echo "<br><br>";
        //Rédiger une expression conditionnelle 
        //pour tester si un nombre est à la fois un multiple de 3 et de 5.

          $nombre = 18;

          if($nombre % 3==0 AND $nombre % 5==0){
              echo "$nombre est bien un multiple de 3 et 5";
          }
          else {
            echo "$nombre n'est pas un multiple de 3 et 5";

          }
          echo "<br><br>";
          //Bourse d'étude aux étudiants en master avec des revenu de moins de 500€
           $statut = "Etudiant";
           $niveau = "License";
           $revenu = 200;
          if($statut=="Etudiant" AND $niveau =="Master" AND $revenu <=500){
              echo "Vous êtes éligible à bénéficier d'une bourse d'étude";
          }
          else {
              echo "Vous ne pouvez pas bénéficier de la bourse du crous";
          }

          echo "<br><br>";
          
          //Une entreprise accorde une prime de 50€ à ses employés 
          //à ceux qui ont au moins 2 enfants 
              

          if($nombre % 500==0 AND $nombre % master==0){
          echo" $nombre est eligible à bénéficier de la bourse du crous " ;
          } 
        else{
            echo "$nombre ne peut pas bénéficié de la bourse du crous " ;
            echo "<br>" ;
            $prime = 50;
            $enfant = 2 ;

        }
        
    
    ?>
</body>
</html>