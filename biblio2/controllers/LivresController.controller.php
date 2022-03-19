<?php
require_once "models/LivreManager.class.php";

class LivresController{
    private $livreManager;

    public function __construct(){
        $this->livreManager = new LivreManager;
        $this->livreManager->chargementLivres();
    }

    public function afficherLivres(){
        $livres = $this->livreManager->getLivres();
        require "views/livres.view.php";
    }

    public function ajoutLivre(){
        require "views/ajoutLivre.view.php";
    }

    public function ajoutLivreValidation(){
        $file = $_FILES['image'];
        $repertoire = "public/images/";
        $nomImageAjoute = $this->ajoutImage($file,$repertoire);
        $this->livreManager->ajoutLivreBd($_POST['titre'],$_POST['nbPages'],$nomImageAjoute);
        header('Location: '. URL . "livres");
    }

    private function ajoutImage(){
    
    $name = isset($_FILES['file']['name']) ? $_FILES['file']['name'] : NULL;


//if(isset($_FILES['file'])){
    $tmpName = $_FILES['image']['tmp_name'];
    //$name = $_FILES['file']['name'];
    $size = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];

    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));
    //Tableau des extensions que l'on accepte
    $extensions = ['jpg', 'png', 'jpeg'];
    //Taille max que l'on accepte
    $maxSize = 400000;
    if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){
        
        $uniqueName = uniqid('', true);
        //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
        $image = $uniqueName.".".$extension;
        //$file = 5f586bf96dcd38.73540086.jpg
        move_uploaded_file($tmpName, 'uploads/'.$image);
    }
    else{
        echo "Mauvaise extension";
    }
    }

}    