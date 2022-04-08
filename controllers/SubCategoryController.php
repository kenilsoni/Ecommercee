<?php
class SubCategoryController
{
    function __construct()
    {
        include('models/SubCategory_model.php');
        $this->model = new SubCategoryModel();
    }
    public function all_subcategory()
    {
        include("./views/all_subcategory.php");
    }
    public function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function getsubcategory()
    {
        $success = $this->model->subcategory_data();
        if (count($success) > 0) {
            echo json_encode($success);
        }
    }
    public function addsubcategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['Category'];
            $name = $this->test_input($_POST['subcategory_name']);
            session_start();
            if ($name != "") {
                $data = array(
                    'ID' => $id,
                    'Subcategory_Name' => $name
                );
                // print_r($data);die();
                $success = $this->model->addsubcategory_data($data);
                if ($success == 1) {

                    $_SESSION['addsubcategory_token'] = true;
                    return 1;
                } else {
                    $_SESSION['addsubcategory_token'] = false;
                    return 0;
                }
            } else {
                $_SESSION['addsubcategory_token'] = false;
                return 0;
            }
        }
    }
    public function deletesubcategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id = $_POST['id'];
            session_start();
            if ($id != "") {
                $success = $this->model->delete_subcategory($id);

                if ($success == 1) {

                    $_SESSION['deletesubcategory_token'] = true;
                    return 1;
                } else {
                    $_SESSION['deletesubcategory_token'] = false;
                    return 0;
                }
            } else {
                $_SESSION['deletesubcategory_token'] = false;
                return 0;
            }
        }
    }
    public function update_subcategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['update_id'];
            $category_id = $_POST['Category'];
            $subcategory = $this->test_input($_POST['subcategory_input']);
            session_start();
            if ($subcategory != "") {
                $data = array(
                    'ID' => $id,
                    'Category_ID' => $category_id,
                    'Subcategory_Name' => $subcategory
                );



                $success = $this->model->update_subcategory($data);
                // echo $success;die();
                if ($success == 1) {

                    $_SESSION['updatesubcategory_token'] = true;
                    return 1;
                } else {
                    $_SESSION['updatesubcategory_token'] = false;
                    return 0;
                }
            } else {
                $_SESSION['updatesubcategory_token'] = false;
                return 0;
            }
        }
    }
}
