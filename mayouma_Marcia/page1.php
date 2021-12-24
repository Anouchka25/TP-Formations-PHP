<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Notre première page PHP</h1>
    <?php 
         echo "Bonjour tout le monde <br>";
         echo "Je m'appelle Dupont";
         echo " <br>" ;   
         echo "J'habite à Paris" ;
         $nom = "Jean-Michel";
         $annee = 1970;
         $ville = " Lyon " ;
         $langage = "PHP"; 
         echo " <br>" ; 
         echo "Je m'appelle $nom, je suis née en $annee j'habite à Lyon" ;
         echo " <br>" ; 
         //affichez J'apprend le langage PHP
         echo "j'apprend le langage $langage" ;
         echo " <br><br>-----Guillemets simples-----<br>" ; 
         echo 'j\'apprend le langage '.$langage ;
         echo " <br>" ; 
         echo 'Je m\'appelle ' .$nom. ', je suis née en '.$annee. ' j\'habite à Lyon' ;
         
         echo " <br><br>-----Opérations-----<br>" ; 
         $nombre1 = 15;
         $nombre2 = 3;

         echo "$nombre1 + $nombre2 = ";
         echo $nombre1 + $nombre2 ;
         echo " <br>" ;
         echo "$nombre1 - $nombre2 = ";
         echo $nombre1 - $nombre2 ;
         echo " <br>" ;
         echo "$nombre1 * $nombre2 = ";
         echo $nombre1 * $nombre2 ;
         echo " <br>" ;
         echo "$nombre1 / $nombre2 = ";
         echo $nombre1 / $nombre2 ;
         echo " <br>" ;
         echo "$nombre1 % $nombre2 = ";
         echo $nombre1 % $nombre2 ;

         echo " <br>" ;
         echo $nombre1.' + '.$nombre2.' = ';
         echo $nombre1 + $nombre2 ;
         echo " <br><br>-----Quelques syntaxe-----<br>" ; 
         
         $nombre = 10;

         //$nombre = $nombre + 1;
         $nombre ++;

         echo $nombre;




    ?>
</body>
</html>