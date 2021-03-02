<?php
require_once(__DIR__ . '/Main_controller.php');
class User_controller extends Main_controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_user()
    {
        return $this->user_model->select_all_user();
    }

    public function add_user()
    {
        $this->user_model->username = $_POST['username'];
        $this->user_model->password = $_POST['password'];
        $this->user_model->description = $_POST['description'];
        $this->user_model->insert_user();
        header('Location: ' . 'http://localhost/www/member/dashboard.php');
    }
}
