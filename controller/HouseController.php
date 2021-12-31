<?php

require_once "model/HouseManager.php";

class HouseController {
    private $houseManager;

    public function __construct(){
        $this->houseManager = new HouseManager;
        $this->houseManager->loadHouses();
    }

    public function displayHouses(){
        $houses = $this->houseManager->getHouses();
        require_once "view/houses.view.php";
    }

    public function newHouseForm(){
        require_once "view/new.house.view.php";
    }

    public function newHouseValidation(){
       $this->houseManager->newHouseDB($_POST['titre'],$_POST['adresse'],$_POST['ville'],$_POST['cp'],$_POST['surface'],$_POST['prix'],$_POST['photo'],$_POST['type'],$_POST['description']);
       header('Location:'. URL . "houses");
    }

    public function editHouseForm($idLogement){
        $house = $this->houseManager->getHouseById($idLogement);
        require_once "view/edit.house.view.php";
    }

    public function editHouseValidation(){
        $this->houseManager->editHouseDB($_POST['id-house'],$_POST['titre'],$_POST['adresse'],$_POST['ville'],$_POST['cp'],$_POST['surface'],$_POST['prix'],$_POST['photo'],$_POST['type'],$_POST['description']);
        header("Location:". URL . "houses");

     }

    public function deleteHouse($idLogement){
        $this->houseManager->deleteHouseDB($idLogement);
        header("Location: " . URL . "houses");
    }

}
