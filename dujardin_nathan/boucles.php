<?php 
 // afficher les valeur de 0 à 10

 for($i=0; $i<=10; $i++){
     echo $i.'<br>'; 
 }

 echo '--------Tableau à index numérique----------<br>';
 $personne = ["Dupont", "Loic", "Paris"];
 $personne = array("Dupont", "Loic", "Paris");

 for($i=0; $i<=2; $i++){
     echo $personne[$i].'<br>';
 }

 echo '--------Tableau associatif----------<br>';
 $personne2 = ['nom'=>'Dupont', 'prenom'=>'Loic', 'ville'=>'Paris'];
 $personne2 = [
     'nom'=>'Dupont', 
     'prenom'=>'Loic', 
     'ville'=>'Paris'
    ];
    foreach($personne2 as $cle => $valeur){
        echo $cle.' : '.$valeur.'<br>';
    }

    echo '--------Tableau associatif----------<br>';
    /** 
     * Créer un tableau associatif voiture : 
     * - modele
     * -fabriquant
     * - annee 
        */ 
    $voiture = ['Fabriquant'=>'Renault', 'Modele'=>'Clio', 'Annee'=>'2008'];
           foreach($voiture as $cle => $valeur){
               echo $cle.' : '.$valeur.'<br>';
           }
    
?>