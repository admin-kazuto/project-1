    <?php 
    class HomeController{
        public $homeController;
        public function __construct() {
            $this->homeController = new homeModel();
        }
        public function HomeMenu() {
            $AllHamburgers = $this-> homeController->getAllHamburgers();
            $AllPizzas = $this-> homeController->getAllPizzas();
            $AllToasts = $this-> homeController->getAllToasts();
            $AllSalads = $this-> homeController->getAllSalads();
            $AllDrinks = $this-> homeController->getAllDrinks();
            require_once 'views/client/home.php';
        }
    }

    ?>