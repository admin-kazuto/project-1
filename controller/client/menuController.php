<?php

class MenuController {
    public $MenuController;

    public function __construct() {
        $this->MenuController = new MenuModel();
    }

    public function listProduct() {
        $AllHamburgers = $this-> MenuController->getAllHamburgers();
        $AllPizzas = $this-> MenuController->getAllPizzas();
        $AllToasts = $this-> MenuController->getAllToasts();
        $AllSalads = $this-> MenuController->getAllSalads();
        $AllDrinks = $this-> MenuController->getAllDrinks();
        require_once('views/client/menu.php');
    }

}
