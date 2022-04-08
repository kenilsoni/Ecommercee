<?php
class UserController
{
    function __construct()
    {
        include('models/User_model.php');
        $this->model = new UserModel();
    }
    public function all_subcategory()
    {
        include("./views/user_list.php");
    }
    public function getuser()
    {
        $success = $this->model->user_data();
        if (count($success) > 0) {
            echo json_encode($success);
        }
    }
   
}
