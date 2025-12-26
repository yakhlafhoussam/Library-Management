<?php

include __DIR__ . '/user_class.php';

class admin_class extends user_class {

    public $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function add($title, $author, $year, $cover) {
        $stmt = $this->conn->prepare("INSERT INTO books (title, author, year, cover) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $author, $year, $cover]);
    }
}

?>