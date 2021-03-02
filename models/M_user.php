<?php
require_once(__DIR__ . '/Main_model.php');
class M_user extends Main_model
{
    public $id;
    public $username;
    public $password;
    public $description;

    public function __construct()
    {
        parent::__construct();
    }

    public function select_all_user()
    {
        return $this->query("SELECT * FROM users");
    }

    public function insert_user()
    {
        return $this->query("INSERT INTO users (username, password, description)
                                    VALUES ('$this->username', '$this->password', '$this->description')");
    }
}
