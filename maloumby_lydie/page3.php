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

          echo "<br>-------------<br>";
          //Vaccination :
          // si dose egale 0 alors on affiche ce message : "Faites-vous vacciner"
          // sinon si dose egale 1 alors on affiche ce message : "Vous devez prendre la 2eme dose"
          // sinon si dose egale 2 alors on affiche ce message : "Vous devez prendre la 3eme dose"
          // sinon si dose egale 3 alors on affiche ce message : "Vous devez faire un rappel de la 3eme dose"
          // sinon dose est différent de 0,1,2,3 alors on affiche ce message : "Vous n'avez pas fait le bon choix"
           
          
          $dose = 2; 

          if ($dose==0)
          {
             echo "faites-vous vaccinner";
          
          }
          elseif ($dose ==1)
          {
            echo "vous devez prendre la 2eme dose";         
         }

        elseif ($dose==2) 
        {
         echo "vous devez prendre la 3eme dose";

        }
        elseif ($dose==3)
        {
            echo"vous devez faire un rappel de la 3eme dose";

        }

         else { 
             echo "Vous n'avez pas fait le bon choix";
         }

         echo "<br>-----Avec la boucle switch--------<br>";
         switch($dose){

            case 0 :
                echo "faites-vous vaccinner";
            break;

            case 1 :
                echo "vous devez prendre la 2eme dose";
            break;

            case 2 :
                echo "vous devez prendre la 3eme dose";
            break;

            case 3 :
                echo"vous devez faire un rappel de la 3eme dose";
            break;

            default : echo "Vous n'avez pas fait le bon choix";
         }

              ?>
</body>

</html>