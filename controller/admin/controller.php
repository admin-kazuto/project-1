<?php

class controller
{
    public $controller;
    public function __construct()
    {
        $this->controller = new modelADM();
    }

    public function home(){
        echo "đã ổn";
    }
}
