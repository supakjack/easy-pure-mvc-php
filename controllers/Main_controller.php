<?php
require_once(__DIR__ . '/../helpers/auto_load.php');
require_once(__DIR__ . '/../models/M_user.php');


class Main_controller
{
    public $user_model;
    public function __construct()
    {
        $this->user_model = new M_user();
    }
}
