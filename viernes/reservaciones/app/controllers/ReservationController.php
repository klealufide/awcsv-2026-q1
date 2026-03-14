<?php
session_start();

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/Reservation.php';

class ReservationController
{

    private $model;

    public function __construct()
    {

        if (!isset($_SESSION['user'])) {
            header("Location: index.php");
            exit;
        }

        $database = new Database();
        $db = $database->connect();

        $this->model = new Reservation($db);
    }

    public function index()
    {

        $reservations = $this->model->getAll();

        require __DIR__ . '/../views/reservations/index.php';
    }

    public function store()
    {

        $name = $_POST['name'];
        $date = $_POST['reservation_date'];
        $people = $_POST['people'];
        $comments = $_POST['comments'];

        $this->model->create($name, $date, $people, $comments);

        header("Location: index.php?page=reservations");
        exit;
    }
}
