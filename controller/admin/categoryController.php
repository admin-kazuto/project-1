<?php
class categoryController{
    public function list(){
        $data = (new category)->all();
        view('admin/list-category', ['data' => $data]);
    }
    public function delete(){
        $category_id  = $_GET['category_id'];
        (new category)->delete($category_id);
        header("location: index.php?act=list-category");
    }
}