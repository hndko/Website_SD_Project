<?php
// application/models/Profile_model.php

class Profile_model
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function get_profile()
    {
        return $this->conn->query("SELECT * FROM `school_profile` WHERE `id` = 1")->fetch_assoc();
    }

    public function update_profile($history, $vision, $mission)
    {
        $history = $this->conn->real_escape_string($history);
        $vision = $this->conn->real_escape_string($vision);
        $mission = $this->conn->real_escape_string($mission);

        $sql = "UPDATE `school_profile` SET
                `history_content` = '$history',
                `vision` = '$vision',
                `mission` = '$mission'
                WHERE `id` = 1";

        return $this->conn->query($sql);
    }
}
