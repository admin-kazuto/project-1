<?php
class categoryController
{
    // Hiển thị danh mục
    public function list()
    {
        $data = (new category)->all();
        view('admin/list-category', ['data' => $data]);
    }
    //xóa danh mục
    public function deleteCategory()
    {
        $category_id  = $_GET['category_id'];
        (new category)->delete($category_id);
        header("location:?act=listcategory");
    }
    //thêm danh mục
    public function add(){
        view("admin/form-add-category");
    }
    public function storeCategory(){
        $data=$_POST;
        (new category())->insertCategory($data);
        header("location: index.php?act=listcategory");

    }
    //sửa danh mục
    public function editcategory(){
        $category_id = $_GET['category_id'];
        $category = (new category)->getCategoryById($category_id);
        view("admin/form-edit-category", ['category'=> $category]);
    }
    public function updateCategory(){
        $data = $_POST;
        $result = (new category)->updateCategory($data);
        if ($result) {
            header("location:?act=listcategory");
        } else {
            echo "Error updating category.";
        }
    }

}
