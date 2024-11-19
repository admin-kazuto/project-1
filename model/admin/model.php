<?php

class modelADM
{
    public $model;
    public function __construct()
    {
        $this->model =  connectDB();
    }
}
