<?php

class Reservation
{

    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAll()
    {

        $sql = "SELECT * FROM reservations ORDER BY reservation_date";

        $result = $this->conn->query($sql);

        return $result;
    }

    public function create($name, $date, $people, $comments)
    {

        $stmt = $this->conn->prepare(
            "INSERT INTO reservations
            (name,reservation_date,people,comments)
            VALUES (?,?,?,?)"
        );

        $stmt->bind_param("ssis", $name, $date, $people, $comments);

        return $stmt->execute();
    }
}