<?php
require_once "House.php";
require_once "Manager.php";

class HouseManager extends Manager {
    private $house;

    public function addHouse($house){
        $this->house[] = $house;
    }

    public function getHouses(){
        return $this->house;
    }

    public function loadHouses(){
        $req  = $this->getBdd()->prepare("SELECT * FROM logement");
        $req->execute();
        $theHouses = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
    
        foreach($theHouses as $house){
            $h = new House($house['id_logement'], $house['titre'], $house['adresse'], $house['ville'], $house['cp'], $house['surface'], $house['prix'], $house['photo'], $house['type'], $house['description']);
            $this->addHouse($h);
        }
    }

    public function newHouseDB($titre, $adresse, $ville, $cp, $surface, $prix, $photo, $type, $description){
        $req = "INSERT INTO logement (titre, adresse, ville, cp, surface, prix, photo, type, description) 
                VALUES (:titre, :adresse, :ville, :cp, :surface, :prix, :photo, :type, :description)";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":titre",$titre, PDO::PARAM_STR);
        $statement->bindValue(":adresse",$adresse, PDO::PARAM_STR);
        $statement->bindValue(":ville",$ville, PDO::PARAM_STR);
        $statement->bindValue(":cp",$cp, PDO::PARAM_INT);
        $statement->bindValue(":surface",$surface, PDO::PARAM_INT);
        $statement->bindValue(":prix",$prix, PDO::PARAM_INT); 
        $statement->bindValue(":photo",$photo, PDO::PARAM_STR); // Checker upload de photo (si String)
        $statement->bindValue(":type",$type, PDO::PARAM_BOOL); // if true vente if false location
        $statement->bindValue(":description",$description, PDO::PARAM_STR);
        $result = $statement->execute();
        $statement->closeCursor();

        if($result){
            $house = new House($this->getBdd()->lastInsertId(),$titre, $adresse, $ville, $cp, $surface, $prix, $photo, $type, $description);
            $this->addHouse($house);
        }
    }

    public function getHouseById($id){
        foreach($this->houses as $house) {
           if($house->getId() == $id){
                return $house;
           }
        }
    }

    public function editHouseDB($idLogement, $titre, $adresse, $ville, $cp, $surface, $prix, $photo, $type, $description){
        $req = "UPDATE logement SET titre = :titre, adresse = :adresse, ville = :ville, cp = :cp, surface = :surface, prix = :prix, photo = :photo, type = :type, description = :description 
        WHERE id_logement = :id_logement";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id_logement",$idLogement, PDO::PARAM_INT);
        $statement->bindValue(":titre",$titre, PDO::PARAM_STR);
        $statement->bindValue(":adresse",$adresse, PDO::PARAM_STR);
        $statement->bindValue(":ville",$ville, PDO::PARAM_STR);
        $statement->bindValue(":cp",$cp, PDO::PARAM_INT);
        $statement->bindValue(":surface",$surface, PDO::PARAM_INT);
        $statement->bindValue(":prix",$prix, PDO::PARAM_INT);
        $statement->bindValue(":photo",$photo, PDO::PARAM_STR); // Checker upload de photo (si String)
        $statement->bindValue(":type",$type, PDO::PARAM_BOOL); // if true vente if false location
        $statement->bindValue(":description",$description, PDO::PARAM_STR);
        $result = $statement->execute();
        $statement->closeCursor();

        if($result){
            $this->getHouseById($idLogement)->setTitre($titre);
            $this->getHouseById($idLogement)->setAdresse($adresse);
            $this->getHouseById($idLogement)->setVille($ville);
            $this->getHouseById($idLogement)->setCp($cp);
            $this->getHouseById($idLogement)->setSurface($surface);
            $this->getHouseById($idLogement)->setPrix($prix);
            $this->getHouseById($idLogement)->setPhoto($photo);
            $this->getHouseById($idLogement)->setType($type);
            $this->getHouseById($idLogement)->setDescription($description);
        }
    }

    public function deleteHouseDB($idLogement){
        $req = "DELETE FROM logement WHERE id_logement = :id_logement";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id_logement", $idLogement, PDO::PARAM_INT);
        $result = $statement->execute();
        $statement->closeCursor();

        if($result ){
          $house = $this->getHouseById($idLogement);    
          unset($house);
        }
    }


}