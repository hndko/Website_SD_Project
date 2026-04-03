<?php
// application/models/Message_model.php

class Message_model
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function get_all()
    {
        return $this->conn->query("SELECT * FROM `" . TABLE_MESSAGES . "` ORDER BY `created_at` DESC");
    }

    public function get_recent($limit = 5)
    {
        return $this->conn->query("SELECT * FROM `" . TABLE_MESSAGES . "` ORDER BY `created_at` DESC LIMIT " . (int)$limit);
    }

    public function get_unread_count()
    {
        $result = $this->conn->query("SELECT COUNT(*) as total FROM `" . TABLE_MESSAGES . "` WHERE `status` = '" . STATUS_UNREAD . "'");
        return $result->fetch_assoc()['total'];
    }

    public function get_total_count()
    {
        $result = $this->conn->query("SELECT COUNT(*) as total FROM `" . TABLE_MESSAGES . "` ");
        return $result->fetch_assoc()['total'];
    }

    public function mark_as_read($id)
    {
        $id = (int)$id;
        return $this->conn->query("UPDATE `" . TABLE_MESSAGES . "` SET `status` = '" . STATUS_READ . "' WHERE `id` = $id");
    }

    public function delete($id)
    {
        $id = (int)$id;
        return $this->conn->query("DELETE FROM `" . TABLE_MESSAGES . "` WHERE `id` = $id");
    }

    public function create($name, $email, $phone, $subject, $message)
    {
        $name = $this->conn->real_escape_string($name);
        $email = $this->conn->real_escape_string($email);
        $phone = $this->conn->real_escape_string($phone);
        $subject = $this->conn->real_escape_string($subject);
        $message = $this->conn->real_escape_string($message);

        $sql = "INSERT INTO `" . TABLE_MESSAGES . "` (`name`, `email`, `phone`, `subject`, `message`) 
                VALUES ('$name', '$email', '$phone', '$subject', '$message')";

        return $this->conn->query($sql);
    }
}
