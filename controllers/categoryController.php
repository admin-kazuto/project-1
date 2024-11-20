<?php
class categoryController{
    public function list(){
        $data = (new category)->all();
        view('admin/list_category', ['data' => $data]);
    }
}