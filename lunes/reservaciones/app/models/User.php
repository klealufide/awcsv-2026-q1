<?php

class User
{

    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function login($username)
    {

        $stmt = $this->conn->query(
            "SELECT * FROM users
            WHERE username = '$username'"
        );

        return $stmt->fetch_assoc();
    }
    
}