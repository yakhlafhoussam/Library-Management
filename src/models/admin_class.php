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

    public function deletebook($id) {
        $stmt = $this->conn->prepare("SELECT * FROM borrows WHERE bookId = ? AND returnDate IS NULL");
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            $stmt = $this->conn->prepare("DELETE FROM books WHERE id = ?");
            $stmt->execute([$id]);
            return true;
        } else {
            return false;
        }
    }
}

?>