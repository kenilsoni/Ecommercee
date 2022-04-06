<?php
class LoginController
{
    function __construct()
    {
        include('models/Event.php');
        $this->model = new EventModel();
    }
    public function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function signin()
    {
        include("views/login.php");
    }
    public function check_login()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $username = $this->test_input($_POST['username']);
            $password = $this->test_input($_POST['password']);
            if (($username || $password) != '') {
                $admin_data = array(
                    'UserName' => $username

                );
                $success = $this->model->check_admin($admin_data);
                foreach ($success as $data) {
                    $ID = $data['ID'];
                    $password_db = $data['Password'];
                }
                if (count($success) > 0) {
                    if (password_verify($password, $password_db)) {
                        session_start();
                        $_SESSION['ID'] = $ID;
                        header('location:?controller=Admin&function=admin_page');
                    } else {
                        echo "<script>alert('Please enter valid password');
                        window.location.href='?function=signin';</script>";
                    }
                } else {
                    echo "<script>alert('Please enter valid username');
                    window.location.href='?function=signin';</script>";
                }
            } else {
                echo "<script>alert('something went wrong')</script>";
            }
        }
    }
}
