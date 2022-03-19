<?php
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
//str_replace — Remplace toutes les occurrences dans une chaîne
//str_replace() retourne une chaîne ou un tableau, dont toutes les occurrences de search dans subject ont été remplacées par replace.
//index.php : La valeur à chercher
//"" : La valeur de remplacement à substituer aux valeurs trouvées
// (isset($_SERVER['HTTPS']) ? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"  : La chaîne de caractères ou le tableau sur lequel on va effectuer la recherche et le remplacement
//$_SERVER[HTTP_HOST]  renvoie le nom de domaine
//$_SERVER[PHP_SELF] renvoie Le nom du fichier du script en cours d'exécution, par rapport à la racine web
//var_dump(URL); //string(43) "http://localhost/TP Formations PHP/biblio2/"

//filter_var — Filtre une variable avec un filtre spécifique
// FILTER_SANITIZE_URL : Supprime tous les caractères sauf les lettres, chiffres et $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.


require_once "controllers/LivresController.controller.php";
$livreController = new LivresController;

try{
    if(empty($_GET['page'])){
        require "views/accueil.view.php";
    } else {
        $url = explode("/", filter_var($_GET['page']),FILTER_SANITIZE_URL);
        var_dump($url); //array(1) { [0]=> string(6) "livres" }
        switch($url[0]){
            case "accueil" : require "views/accueil.view.php";
            break;
            case "livres" : 
                if(empty($url[1])){
                    $livreController->afficherLivres();
                } else if($url[1] === "l") {
                    $livreController->afficherLivre($url[2]);
                } else if($url[1] === "a") {
                    $livreController->ajoutLivre();
                } else if($url[1] === "m") {
                    $livreController->modificationLivre($url[2]);
                } else if($url[1] === "s") {
                    $livreController->suppressionLivre($url[2]);
                } else if($url[1] === "av") {
                    $livreController->ajoutLivreValidation();
                } else if($url[1] === "mv") {
                    $livreController->modificationLivreValidation();
                }
                else {
                    throw new Exception("La page n'existe pas");
                }
            break;
            default : throw new Exception("La page n'existe pas");
        }
    }
}
catch(Exception $e){
    echo $e->getMessage();
}
