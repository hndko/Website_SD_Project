<?php
// application/models/Admin_model.php

class Admin_model
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function authenticate($username, $password)
    {
        $stmt = $this->conn->prepare("SELECT `id`, password FROM `admin_users` WHERE `username` = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            if (password_verify($password, $row['password'])) {
                return $row['id'];
            }
        }
        return false;
    }

    public function get_by_id($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM `admin_users` WHERE `id` = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
