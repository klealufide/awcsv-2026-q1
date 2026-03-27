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

        require __DIR__ . '/../views/reservations/index.php';
    }

    public function getReservation()
    {
        $reservations = $this->model->getAll();
        echo json_encode(["reservations" => $reservations->fetch_all(MYSQLI_ASSOC)]);
    }

    public function store()
    {

        try {
            $name = $_POST['name'];
            $date = $_POST['reservation_date'];
            $people = $_POST['people'];
            $comments = $_POST['comments'];

            $this->model->create($name, $date, $people, $comments);

            echo json_encode(["response" => "00"]);
        } catch (ErrorException $e) {
            echo json_encode(["response" => "01"]);
        }
    }
}
