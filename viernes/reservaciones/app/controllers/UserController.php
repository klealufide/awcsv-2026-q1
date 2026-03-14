<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/User.php';

class UserController
{

    private $model;

    public function __construct()
    {

        $database = new Database();
        $db = $database->connect();

        $this->model = new User($db);
    }

    public function showLogin()
    {

        require __DIR__ . '/../views/login.php';
    }

    public function login()
    {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->model->login($username);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['user'] = $user['username'];
            $_SESSION['rol'] = $user['rol'];

            header("Location: index.php?page=reservations");
            exit;
        } else {

            header("Location: index.php");
            exit;
        }
    }
}
