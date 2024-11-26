<?php 

    class BlogController{
        public $blogController;
        public function __construct(){
            $this->blogController = new blogModel();
        }

        public function blog(){}
    }

?>