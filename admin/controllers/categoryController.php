<?php
require_once 'models/categoryModel.php';
class categoryController
{
    public $categoryModel;

    function __construct()
    {
        $this->categoryModel = new categoryModel();
    }
    function listCategory()
    {
        $allCategory = $this->categoryModel->getAllCategory();
        require_once 'views/listCategory.php';
    }
    function insertCategory()
    {
        require_once 'views/insertCategory.php';
        if (isset($_POST['btn_insert'])) {
            $name = $_POST['cate_name'];
            $des = $_POST['cate_description'];
            if ($this->categoryModel->insertCategory($name, $des)) {
                header("location:?act=listcategory");
            } else {
                echo "lỗi";
            }
        }
    }
    function updateCategory($id)
    {
        $oneCategory = $this->categoryModel->findCategoryById($id);
        require_once 'views/updateCategory.php';
        if (isset($_POST['btn_update'])) {
            $name = $_POST['cate_name'];
            $des = $_POST['cate_description'];
            if ($this->categoryModel->updateCategory($id, $name, $des)) {
                header("location:?act=listcategory");
            } else {
                echo "lỗi";
            }
        }
    }
    function deleteCategory($id)
    {
        $this->categoryModel->deleteCategory($id);
        header("Location: ?act=listcategory");
    }
}
