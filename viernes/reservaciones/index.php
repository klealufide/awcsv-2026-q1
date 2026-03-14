<?php
require './app/controllers/UserController.php';
require './app/controllers/ReservationController.php';


$page = $_GET['page'] ?? 'login';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if ($_POST['option'] == "login") {

        $auth = new UserController();
        $auth->login();
        exit;
    }

    if ($_POST['option'] == "store") {

        $res = new ReservationController();
        $res->store();
        exit;
    }
}

switch ($page) {

    case "reservations":

        $res = new ReservationController();
        $res->index();

        break;

    default:

        $auth = new UserController();
        $auth->showLogin();

        break;
}