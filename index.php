<?php
define("URL" , str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ));

require_once "controller/HouseController.php";
$houseController = new HouseController;

if(empty($_GET['page'])){
    require_once "view/home.view.php";
}else {
    $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL );
    
    switch($url[0]){
        case "accueil" : require_once "view/home.view.php";
        break;
        case "house" : 
            if(empty($url[1])){
                $houseController->displayHouses();
            } else if($url[1] === "add"){
                $houseController->newHouseForm();
            } else if($url[1] === "hvalid"){
                $houseController->newHouseValidation();
            } else if($url[1] === "edit"){
                $houseController->editHouseForm($url[2]);
            } else if($url[1] === "editvalid"){
                $houseController->editHouseValidation();
            }
            else if($url[1] === "delete"){
                $houseController->deleteHouse($url[2]);
            } 
        break;
    }
}