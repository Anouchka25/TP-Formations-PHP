<?php
require_once "Model.class.php";
require_once "Livre.class.php";

class LivreManager extends Model{
    private $livres;//tableau de Livre

    public function ajoutLivre($livre){
        $this->livres[] = $livre;
    }

    public function getLivres(){
        return $this->livres;
    }

    public function chargementLivres(){
        $req = $this->getBdd()->prepare("SELECT * FROM livres");
        $req->execute();
        $mesLivres = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesLivres as $livre){
            $l = new Livre($livre['id'],$livre['titre'],$livre['nbPages'],$livre['image']);
            $this->ajoutLivre($l);
        }
    }

    public function ajoutLivreBd($titre,$nbPages,$image){
        $req = "
        INSERT INTO livres (titre, nbPages, image)
        values (?, ?, ?)";
        $stmt = $this->getBdd()->prepare($req);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $livre = new Livre($this->getBdd()->lastInsertId(),$titre,$nbPages,$image);
            $this->ajoutLivre($livre);
        }        
    }

}