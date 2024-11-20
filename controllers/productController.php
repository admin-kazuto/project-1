<?php
class productController{
    public function list(){
        $data = (new product)->all();
        view('admin/list_product', ['data' => $data]);
    }

    public function add(){
        $catygory = (new category)->all();
        view('admin/product_form', ['category'=>$catygory]);
    }
    public function descount(){
        $descount = (new descount)->all();
        view('admin/product_from', ['descount'=>$descount]);
    }

    public function store(){
        $data = $_POST;
        $Image = "";
        $data['product_image']= $Image;
        (new product)->insert($data);
        header("location: index.php?act=list-product");
        die;
        }
}